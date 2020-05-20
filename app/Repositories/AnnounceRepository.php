<?php

namespace App\Repositories;

use App\Announce;
use App\User;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class AnnounceRepository.
 */
class AnnounceRepository extends BaseRepository
{
    /**
    * @return string
    *  Return the model
    */
    public function model()
    {
        return Announce::class;
    }

    public static function filterByLngAndLatOrAndCategorie(float $lng, float $lat,  int $range = 0, int $idCategorie = 0){
        $latmax = $lat +1;
        $latmin = $lat -1;
        $lngmax = $lng +1;
        $lngmin = $lng -1;
        if($range != 0){
            $R = 6371; //constant earth radius. You can add precision here if you wish
            $latmax = $lat + rad2deg($range/$R);
            $latmin = $lat - rad2deg($range/$R);
            $lngmax = $lng + rad2deg(asin($range/$R) / cos(deg2rad($lat)));
            $lngmin = $lng - rad2deg(asin($range/$R) / cos(deg2rad($lat)));
        }
        if ($idCategorie == 0 || $range != 0){
            return DB::table('Announces')
                ->select('Announces.*', 'Users.user_name', 'Users.user_surname', 'Users.idUSer')
                ->leftJoin('Users', 'Announces.Users_idUser', '=', 'Users.idUser')
                ->where('announce_lat', '>=', $latmin)
                ->where('announce_lat', '<=', $latmax)
                ->where('announce_lng', '>=', $lngmin)
                ->where('announce_lng', '<=', $lngmax)
                ->where('announce_is_available', '=', true)
                ->get();
        } else {
            $qb = DB::table('Announces')
                ->select('Announces.*', 'Users.user_name', 'Users.user_surname', 'Users.idUSer')
                ->leftJoin('Users', 'Announces.Users_idUser', '=', 'Users.idUser')
                ->join('Products', 'Announces.products_idproduct', '=', 'Products.idproduct');
                if($idCategorie == 0){
                    $qb->where('product_categories_idproduct_category', [1,2,3,4,5,6]);
                }else{
                    $qb->where('product_categories_idproduct_category', $idCategorie);
                }
                return $qb->where('announce_lat', '>=', $latmin)
                ->where('announce_lat', '<=', $latmax)
                ->where('announce_lng', '>=', $lngmin)
                ->where('announce_lng', '<=', $lngmax)
                ->where('announce_is_available', '=', true)
                ->get();
        }
    }

    public static function AnnounceThatIsAvailable($idAnnounce){

        return DB::table('Announces')
            ->where('announce_is_available','=',true)
            ->where('idAnnounce','=',$idAnnounce)
            ->get();
    }

    public static function determineIfUserOwnTheAnnounce($idAnnounce, $idUser){

        return DB::table('Announces')
            ->where('idAnnounce','=',$idAnnounce)
            ->where('Users_idUser','=',$idUser)
            ->get();
    }
}
