<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="about" class="page">
    <!-- Scrollable page content-->
    <div class="page-content">
      <div class="content-block">
        <div class="content-block-inner">
          <div class="row">
            <div class="col-100">
              <h3 style="text-align: center;">{{$bar->name}}</h3>
              <h4 style="text-align: center;"><a href="http://menomoniedrinkspecials.com/blog/{{$bar->blogname}}" class="external">Blog</a></h4>
              <div class="list-block">
                <ul>
                  @foreach($specials as $special)
                  <li class="item-content">
                    <div class="item-inner">
                      <div class="item-title">{{$special->text}}</div>
                      <div class="item-after"><span class="badge bg-red" style="font-size: 15px;">$ {{$special->price}}</span></div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              </div>
            </div>
            <p><a href="#" class="back"><i class="icon icon-back"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
