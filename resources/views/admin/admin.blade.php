@include('layouts.header')
@include('layouts.navbarDesktop')
@include('layouts.navbarMobile')

<div id="connection">
    <div class="col-md-12 text-center">
        <div class="row" style="margin:0;">
            <div class="col-xs-12 col-sm-12">

                <div id="register">
                    <div class="card">
                        <div class="register">
                            <h3>Create a discount Code For multiple User</h3>
                            <form class="" action="/discountCode" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="OneOrMultipleUser" value="Multiple">
                                    <input type="integer" name="discount_code_amount" value="" placeholder="reduction amount*" >
                                    <input type="integer" name="expiration_time" value="" placeholder="expiration time*">
                                    <input type="integer" name="minimum_amount" placeholder="minimum amount*">
                                    <input type="text" name="periode_minimum_amount" placeholder="range minimum amount calcul*">
                                </div>
                                <div class="form-group text-center" id="button_register_normal">
                                    <input type="submit" name="" value="Register">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="register">
                    <div class="card">
                        <div class="register">
                            <h3>Create a discount Code For one user by its IdUser</h3>
                            <form class="" action="/discountCode" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="integer" name="discount_code_amount" value="" placeholder="reduction amount*" >
                                    <input type="integer" name="expiration_time" value="" placeholder="expiration time*">
                                    <input type="hidden" name="OneOrMultipleUser" value="One">
                                    <input type="integer" name="idUserDiscount_codeBeneficiary" placeholder="id beneficiary*">
                                </div>
                                <div class="form-group text-center" id="button_register_normal">
                                    <input type="submit" name="" value="Register">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="register">
                    <div class="card">
                        <div class="register">

                            <h3>CONTACTS</h3>
                            @if(!empty($errorContact))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errorContact }}
                                </div>
                            @endif

                            @if(!empty($successContact))
                                <div class="alert alert-success" role="alert">
                                    {{ $successContact }}
                                </div>
                            @endif

                            @if(isset($contacts) && !empty($contacts))
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">mail</th>
                                        <th scope="col">subject</th>
                                        <th scope="col">content</th>
                                        <th scope="col">Delete the contact</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $key => $contact)
                                        <tr>
                                            <th scope="row">{{ $contact->idContact }}</th>
                                            <td>{{ $contact->contact_email }}</td>
                                            <td>{{ $contact->contact_subject }}</td>
                                            <td><button style='margin: 0' type="button" onclick='showContactModal({{ $key }})'>View</button></td>
                                            {{--<td>{{ $contact->contact_content }}</td>--}}
                                            <td><form action="/contact/destroy/{{$contact->idContact}}" method="get"><button style="margin: 0" type="submit">Delete</button></form></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>

                <div id="register">
                    <div class="card">
                        <div class="register">

                            <h3>REPORTS</h3>
                            @if(!empty($errorReport))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errorReport }}
                                </div>
                            @endif

                            @if(!empty($successReport))
                                <div class="alert alert-success" role="alert">
                                    {{ $successReport }}
                                </div>
                            @endif

                            @if(isset($reports) && !empty($reports))
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">date</th>
                                        <th scope="col">sender</th>
                                        <th scope="col">user_reported</th>
                                        <th scope="col">content</th>
                                        <th scope="col">Delete the report</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reports as $key => $report)
                                        <tr>
                                            <th scope="row">{{ $report->idReport }}</th>
                                            <td>{{ $report->report_date }}</td>
                                            <td>{{ $report->sender->email }}</td>
                                            @if(isset($report->user_reported->email))
                                            <td>{{ $report->user_reported->email }}</td>
                                            @elseif(isset($report->announce->user->email ))
                                            <td>{{ $report->announce->user->email }}</td>
                                            @else
                                                <td>not specify</td>
                                            @endif
                                            <td><button style="margin: 0" type="button" onclick="showReportModal({{ $key }})">View</button></td>
                                            <td><form action="/report/destroy/{{$report->idReport}}" method="get"><button style="margin: 0" type="submit">Delete</button></form></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <form class="" action="logout" method="post">
                @csrf
                <div class="form-group text-center">
                    <input type="submit" name="" value="Disconnect">
                </div>
            </form>
        </div>
    </div>


        <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contact-modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <span id="modal-body-contact">

                    </span>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"  id="report-modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <span id="modal-body-report">

                    </span>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
</div>

<script type="text/javascript">
    var contacts = @json($contacts);
    var reports = @json($reports);

    const contactBody = document.getElementById('modal-body-contact');
    const contactTitle = document.getElementById('contact-modal-title');
    const reportBody = document.getElementById('modal-body-report');
    const reportTitle = document.getElementById('report-modal-title');

    function showContactModal(indice){
        let contact = "<div class='modal-body'>" +
                    " Subject:<br>"+
                    contacts[indice]['contact_subject'] +
                    "<br><br> Content: <br>" +
                    contacts[indice]['contact_content'] +
                    "</div>";
        contactBody.innerHTML = '';
        contactTitle.innerText = contacts[indice]['contact_email'];
        contactBody.insertAdjacentHTML('beforeend',contact);

        $('#modal-contact').modal('show');
    }

    function showReportModal(key){
        let report = "<div class='modal-body'>" +
            " Subject:<br>"+
            reports[key]['report_subject'] +
            "<br><br> Content: <br>" +
            reports[key]['report_comment'] +
            "</div>";

        reportTitle.innerText = reports[key]['sender']['email'];
        reportBody.innerHTML = '';
        reportBody.insertAdjacentHTML('beforeend',report);
        $('#modal-report').modal('show');
    }
</script>
@include('layouts.footer')
