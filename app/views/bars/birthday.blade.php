<div class="views layout-dark">
<div class="view view-main">
<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="about" class="page">
    <!-- Scrollable page content-->
    <div class="page-content">
  <a href="/"  class="back" ><img id="backButtonImg" src="{{asset('assets/img/left-round-xxl.png')}}" /></a>
      <div class="content-block">
        <div class="content-block-inner">
          <div class="row">
            <div class="col-100">
    
              <h1 style="text-align: center;">Birthdays</h1>
              <div class="list-block">
                <ul>
                  @foreach($bars as $bar)
                    @if(count($bar->specials) > 0)
                    <h2 strong>{{$bar->name}}</h2>
                      @foreach($bar->specials as $special)
                        <li class="item-content">
                          <div class="item-inner">
                            <div class="item-title">{{$special->text}}</div>
                          </div>
                        </li>
                    @endforeach
                    @endif
                  @endforeach
                </ul>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>