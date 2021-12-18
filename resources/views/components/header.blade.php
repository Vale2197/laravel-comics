<header>
   <nav>

         <div class="blueBar container-fluid">

           <div class="container">
               <div class="row">

                   <div class="d-flex justify-content-end">
                        <p class="m-0 me-4">
                            DC POWER VISA
                        </p>
                        <p class="m-0 d-flex align-items-center">
                            ADDITIONAL DC SITES <i class="ms-2 fas fa-sort-down"></i>
                        </p>
                   </div>
                  
               </div>
           </div>

        </div>
    <!-- / blue bar -->

        <div class="myNav container">
            <div class="row align-items-center">
                <div class="col-1">
                    <img style="width: 60px" src="{{asset('/img/dc-logo.png')}}" alt="#">
                </div>

                <div class="col-9">
                    <ul class="d-flex list-unstyled justify-content-around m-0">
                        @foreach($headerLinks as $link)
                        <li>
                           <a href="#">  <strong> {{$link}} </strong> </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-2">
                    <form action="">
                        <input type="text" value="Search" class="form-control text-end"> 
                    </form>
                </div>
            </div>
        </div>
   </nav>
</header>