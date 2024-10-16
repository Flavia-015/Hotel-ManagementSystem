<div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Welcome to a world of comfort, luxury, and style. At Keto Hotel, we offer a wide range of thoughtfully designed rooms and suites tailored to meet the diverse needs of our guests. 
                        Whether you're here for business, leisure, or a special occasion, our accommodations promise a perfect balance of relaxation and functionality. 
                        Each room is equipped with modern amenities, elegant furnishings, and personalized touches that ensure a memorable stay. Explore our selection of rooms and find the perfect space to call your own during your stay with us. </p>
                  </div>
               </div>
            </div>
            <div class="row">

               @foreach($room as $rooms)

               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img  style="height: 200px; width:350px" src="room/{{$rooms->image}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>{{$rooms->room_title}}</h3>
                        <p style="padding:10px">{!! Str::limit($rooms->description, 100) !!} </p>
                        <a class="btn btn-primary" href="{{url('room_details',$rooms->id)}}">Room Details</a>
                     </div>
                  </div>
               </div>

              @endforeach

            </div>
         </div>
      </div>