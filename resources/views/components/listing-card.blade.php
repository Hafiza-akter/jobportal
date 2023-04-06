@props(['listing'])


       <div class="but_list">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
         <ul id="myTab" class="nav nav-tabs" role="tablist">
           <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Available jobs</a></li>
           <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Show Descriptions</a></li>
        </ul>
     <div id="myTabContent" class="tab-content">
       <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
         <div class="tab_grid">
             <div class="jobs-item with-thumb">
                 <div class="thumb"><a href="jobs_single.html"><img src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('images/a1.jpg')}}" class="img-responsive" alt=""/></a></div>
                 <div class="jobs_right">
                     <div class="date">30 <span>Jul</span></div>
                     <div class="date_desc"><h6 class="title"><a href="{{route('jobbyid', $listing->id)}}">{{$listing->title}}</a></h6>
                        <span class="meta">
                            <x-listing-tags :tagCsv="$listing->tags" />
                          </span>
                     </div>
                     <div class="clearfix"> </div>
                     <ul class="top-btns">
                         <li><a href="#" class="fa fa-plus toggle"></a></li>
                         <li><a href="#" class="fa fa-star"></a></li>
                         <li><a href="#" class="fa fa-link"></a></li>
                     </ul>
                     <p class="description">{{$listing->description}} <a href="jobs_single.html" class="read-more">Read More</a></p>
                 </div>
                 <div class="clearfix"> </div>
             </div>
          </div>
         
       </div>
   </div>
  </div>
 </div>
 