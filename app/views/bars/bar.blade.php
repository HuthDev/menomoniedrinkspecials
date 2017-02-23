<?php $i = 0; ?>


<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="about" class="page">
    <!-- Scrollable page content-->
    <div class="page-content">

      <div class="content-block">
        <div class="content-block-inner">
          <div class="row">
            <div class="col-100">
            <p><a href="/" class="back" style="float: left;"><i class="icon icon-back"></i></a></p>
              <h1 style="text-align: center;">{{$bar->name}}</h1>
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
         
              <a href="/" class="back" style="float: left;"><i class="icon icon-back"></i></a>
              </div>

            </div>

          </div>
          
        </div>
      </div>
    </div>
</div>
