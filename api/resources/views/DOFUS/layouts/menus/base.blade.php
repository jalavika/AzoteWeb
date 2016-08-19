@section('menu')
<aside class="col-md-3">
    <div class="ak-container ak-main-aside">

        @if (Auth::guest())
        <div class="row ak-container ak-panel ak-panel-blue">
            <div class="ak-panel-title">
                <span class="ak-panel-title-icon ak-icon-med ak-bank"></span> Connexion
            </div>
            <div class="ak-panel-content ak-login-panel">
                <div class="ak-form">
                    {!! Form::open(['route' => 'login']) !!}
                        <div class="form-group @if ($errors->has('auth')) has-error @endif">
                            <label class="control-label" for="email">Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email" value="{{ Input::old('email') }}" id="email">
                        </div>

                        <div class="form-group @if ($errors->has('auth')) has-error @endif">
                            <label class="control-label" for="userpass">Mot de passe</label>
                            <input type="password" class="form-control ak-field-password ak-tooltip" placeholder="Mot de passe" name="password" value="{{ Input::old('password') }}" id="userpass" data-hasqtip="0">
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="remember" checked="checked">Rester connecté
                                </label>
                            </div>
                        </div>
                        <input type="submit" role="button" class="btn btn-primary btn-lg btn-block" id="login_sub" value="Se connecter">
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @else
        <div class="row ak-container ak-panel ak-panel-blue">
            <div class="ak-panel-title">
                <span class="ak-panel-title-icon ak-icon-med ak-bank"></span> Mon compte
            </div>
            <div class="ak-panel-content ak-profile-panel">
                <div class="account-avatar"><img src="{{ URL::asset(Auth::user()->avatar) }}" /></div>
                <div class="account-details">
                    <div class="account-name">{{ Auth::user()->firstname }}</div>
                    <div class="account-info">
                        <a href="{{ URL::route('profile') }}"><button class="btn btn-primary btn-sm">Gestion de compte</button></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="ak-reserve-container">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="ak-ogrine-reserve-critical ak-ogrines-reserve">
                                <a href="{{ URL::route('shop.payment.country') }}">
                                    <span class="ak-reserve">{{ Utils::format_price(Auth::user()->points) }}</span>
                                    <span class="ak-icon-small ak-ogrines-icon"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="ak-ogrine-reserve-critical ak-gifts-reserve">
                                <a href="{{ URL::route('vote.index') }}">
                                    <span class="ak-reserve">{{ Utils::format_price(intval(Auth::user()->votes / 10)) }}</span>
                                    <span class="ak-icon-small ak-gifts-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logout">
                    <a href="{{ URL::route('logout') }}"><button class="btn btn-primary btn-lg btn-block">Déconnexion</button></a>
                </div>
            </div>
        </div>
        @endif

        <div class="row ak-container">
            <a class="ak-btn-code" href="{{ URL::route('vote.index') }}" style="padding-left:70px;font-size:23px;">Vote et gagne des cadeux</a>
        </div>

        <div class="row ak-container">
            <div class="ak-block-shop">
                <div class="text-center ak-shop-top">
                    <a href="{{ URL::route('shop.payment.country') }}" class="ak-shop-title"> La boutique</a>
                </div>
                <div class="ak-shop-articles">
                    <div class="row ak-container">
                        <div class="ak-column ak-container col-xs-12 col-sm-4 col-md-12">
                            <div class="ak-shop-article">
                                <div class="ak-shop-article-container">
                                    <div class="ak-shop-article-action">
                                        <a href="{{ URL::route('shop.payment.country') }}" class="btn btn-primary btn-lg ak-btn-unlock"><span class="ak-icon-med ak-unlock"></span> Acheter des <span class="ak-icon-ogrines"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ URL::route('shop.payment.country') }}" class="ak-shop-link"> Aller sur la boutique</a>
                </div>
            </div>
            <a class="ak-home-facebook" href="{{ config('dofus.social.facebook') }}" target="_blank">Nous suivre<br>sur <span>Facebook</span></a>
            <a class="ak-home-youtube" href="{{ config('dofus.social.youtube') }}" target="_blank">visiter la chaine<br>youtube <span>{{ config('dofus.title') }}</span></a>
        </div>
    </div>
</aside>
@stop