<?php

namespace App\Repositories;

use App\Seller;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class ReportRepository.
 */
class SellerRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Seller::class;
    }

    public static function GetAllSellersWithComments(){

        return DB::table('Sellers')
            ->join('Users','Sellers.Users_idUser','Users.idUser')
            ->join('Announces','Sellers.Users_idUser','Announces.Users_idUser')
            ->join('Comments','Announces.idAnnounce','Comments.Announces_idAnnounce')
            ->where('Comments.comment_note','!=',null)
            ->get();
    }

}