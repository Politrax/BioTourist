@include('layouts.header')
@include('layouts.navbarDesktop')
@include('layouts.navbarMobile')
<div id="message">
  <div class="col-md-12 text-center">
    <div class="row" style="margin:0;">
      <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 text-center">
        <div class="card" data-aos="fade-down">
          <div id="message_list">
            <h3>Messages</h3>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @if(isset($response))
                  @foreach($response as $key => $messages)
                    <tr>
                      <td><div style="background-image:url('../../public/img/img.jpg')"></div></td>
                      <td>John Doe</td>
                      <td>15/04/2020 11:49:05</td>
                      <td>Discussion N°{{$key}}</td>
                      <td><button type="submit" name="button" onclick="seeMessages({{ $key }})">See</button></td>
                    </tr>
                    <form action="{{ url('message/store') }}" method="post">
                      @csrf
                      <div class="messages{{$key}} messagesHidden" style="display: none">
                        @foreach($messages as $message)
                          @if(isset($message))
                            <div>
                              {{$message->message_content}}
                            </div>
                          @endif
                        @endforeach
                        <input type="hidden" name="idAnnounce" value="{{ $message->Announces_idAnnounce }}">
                          Subject
                        <input type="text" name="message_subject" id="message_subject"><br>
                          Content
                        <input type="text" name="message_content" id="message_content"><br>
                        <button type="submit">Send</button>
                      </div>
                    </form>
                  @endforeach
                @endif
                </tbody>
              </table>
          </div>
        </div>
        <div class="cta" data-aos="fade-up">
          <div class="row">
            <div class="col-md-12">
              <button type="button" name="button" onclick="window.location.href='{{ url('profil') }}'">Return to profil</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')


<script>

  function seeMessages(idMessages){
    // let oldId = 'messages'+idMessages;
    let newId = '.messages'+idMessages;
    $('.messagesHidden').hide();
    $(newId).show();
  }
</script>