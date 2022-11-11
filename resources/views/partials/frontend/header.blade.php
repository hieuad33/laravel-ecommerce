 <header class="header_section border-bottom border-primary rounded-bottom " >
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                <div>
                <a class="navbar-brand" href="index.html"><img width="250" src="{{asset('img/logo1.png')}}" style="width: 50px;" alt="#" /></a>
                <span>SP SHOP</span>
            </div>
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                         <li class="nav-item">
                           <a class="nav-link" href="{{route('shop.index')}}">Products</a>
                        </li>
                                
                      
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              @include('partials.frontend.pages')
                           </ul>
                        </li>
                                       <li class="nav-item">
                           <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                        </li>
                        <li class="nav-item">   <!-- gio hàng + dang nhap -->
                          <livewire:frontend.header.cart-component />

                        </li>
                        @guest
                             <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Reg</a></li>
                            @else
                                <li class="nav-item">
                              
                                </li >

                                <li class="nav-item dropdown">
                                    <a   class="nav-link dropdown-toggle"
data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: #578a01;"><i class="fas fa-user"></i></a>

                                    <ul class="dropdown-menu">
                                        @role('admin')
                                        <li><a href="{{ route('admin.index') }}" style="color: #578a01;">
                                                Administration
                                            </a></li>
                                        @endrole  
                                        @auth  
                                         <li><a  
                                          href="{{ route('user.dashboard') }}" style="color: #578a01;">Dashboard</a></li>
                                        @endauth
                                          <li class="nav-item">
                                            <a class="dropdown-itemnav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #578a01;">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                    
                                       
                                        
                                           
                                        
                                      
                                    
                                </li>
                            @endguest
                    

                        <li>
                            
                        </li>
                        <form>
                        <div class="input-group rounded " style="
    margin: auto;">
                        <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" value="{{ old('keyword', request()->keyword) }}" />
                            <span class="input-group-text border-0 pb-2" id="search-addon">
                             <i class="fas fa-search"></i>
                            </span>
                    </div>
                    </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>




