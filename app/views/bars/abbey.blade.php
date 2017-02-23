<?php $i = 0; ?>


<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="abbey" class="page">
    <!-- Scrollable page content-->
    <div class="page-content">
	<a href="/"  class="back" ><img id="backButtonImg" src="{{asset('assets/img/left-round-xxl.png')}}" /></a>
      <div class="content-block">
        <div class="content-block-inner">
          <div class="row">
            <div class="col-100">
            
              <h1 id="sticker" style="text-align: center; ">{{$bar->name}}</h1>
              <h2 style="text-align: center;"><a href="http://menomoniedrinkspecials.com/blog/{{$bar->blogname}}" class="external">Blog</a></h2>
              <div class="list-block">
                <ul>	

                  @foreach($days as $day)
                  	@if(count($day->specials) > 0)
		                  @if($i == 0)
		                  <div style="background-color: '#8e8e93';">
		                  	<h3 style="text-align: center;">{{$day->day}}</h3>
		                  		@foreach($day->specials as $special)
				                  <li class="item-content">
				                    <div class="item-inner">
				                      <div class="item-title" style="font-size: 15px">{{$special->text}}</div>
				                      <div class="item-after"><span class="badge bg-red" style="font-size: 15px;">$ {{$special->price}}</span></div>
				                    </div>
				                  </li>
		                  		@endforeach
		                  		</br>
		                  </div>
		                  <?php $i = 1; ?>
		                  @elseif($i == 1)
		                  <div style="background-color: gray;">
		                  	<h3 style="text-align: center;">{{$day->day}}</h3>
		                  		@foreach($day->specials as $special)
				                  <li class="item-content">
				                    <div class="item-inner">
				                      <div class="item-title" style="font-size: 15px">{{$special->text}}</div>
				                      <div class="item-after"><span class="badge bg-red" style="font-size: 15px;">$ {{$special->price}}</span></div>
				                    </div>
				                  </li>
		                  		@endforeach
		                  		</br>
		                  </div>
		                  <?php $i = 0; ?>
		                  @endif
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
