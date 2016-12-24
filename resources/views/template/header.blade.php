  <header>

  <nav class="navbar navbar-inverse" role="navigation" style="margin-bottom: 30px; padding-top: 35px;">

        <div class="container" style="padding-top:10px;">

            <!-- Brand and toggle get grouped for bettermobile display -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    <span class="sr-only">Menú</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse bordes" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-centered" style="text-align:center;">

                    <li <?php if ($seccion=="Inicio") { echo 'class="active"'; } ?> >

                        <a href="{{ URL::to('/') }}">Home</a>

                    </li>

                    <li <?php if ($seccion=="La Rostería") { echo 'class="active"'; } ?> >

                        <a href="/nosotros">La Rostería</a>

                    </li>

                    <li <?php if ($seccion=="Servicios") { echo 'class="active"'; } ?> >

                        <a href="/servicios">Servicios</a>

                    </li>



                    <li <?php if ($seccion=="Academia") { echo 'class="active"'; } ?> >

                        <a href="/academia" >Academia</a>

                    </li>

                    <li class="dropdown" >

                        <a href="/contacto"  style="border-right: none;">Contacto</a>

                    </li>

                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </div>

        <!-- /.container -->

    </nav>

</header>