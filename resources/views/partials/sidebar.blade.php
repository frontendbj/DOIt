<div class="sidebar-inner niceScrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="{{route('home')}}" class="waves-effect">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title">Programmation des visites</li>       
                         
                          
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-sun"></i><span>Fonctionnalités</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('programs.create')}}">Programme</a></li>
                                    <li><a href="{{ route('visits.create')}}">Visite</a></li>
                                    <li><a href="{{ route('programmes.board')}}">Tableau de bord</a></li>
                                  
                                </ul>
                            </li>
                           
                            
                           

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->