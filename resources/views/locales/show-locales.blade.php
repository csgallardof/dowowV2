@extends('layouts.dashboard')

@section('template_title')
  Mostrar Local
@endsection

@section('template_linked_css')
@endsection

@section('header')
    Locales Comerciales
@endsection

@section('breadcrumbs')
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{url('/')}}">
            <span itemprop="name">
                {{ trans('titles.app') }}
            </span>
        </a>
        <i class="material-icons">chevron_right</i>
        <meta itemprop="position" content="1" />
    </li>
    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="/users" disabled>
            <span itemprop="name">
                Locales
            </span>
        </a>
        <meta itemprop="position" content="2" />
    </li>
@endsection

@section('content')

<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--12-col-desktop margin-top-0">
    <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
        <h2 class="mdl-card__title-text logo-style">
           Detalle de Locales
        </h2>

    </div>
    <div class="mdl-card__supporting-text mdl-color-text--grey-600 padding-0 context">
        <div class="table-responsive material-table">
            <table id="user_table" class="mdl-data-table mdl-js-data-table data-table" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">ID</th>
                    <th class="mdl-data-table__cell--non-numeric">Local</th>
                    <th class="mdl-data-table__cell--non-numeric">Descripcion</th>
                    <th class="mdl-data-table__cell--non-numeric no-sort no-search">Actions</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($locales as $local)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric"><a href="{{ URL::to('locales/' . $local->id) }}">{{$local->id}}</a></td>
                            <td class="mdl-data-table__cell--non-numeric"><a href="{{ URL::to('locales/' . $local->id) }}">{{$local->nombre_locales}} </a></td>
                           
                            <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a href="{{ URL::to('locales/' . $local->id) }}">{{$local->descripcion_locales}} </a></td>
                            
                            <td class="mdl-data-table__cell--non-numeric">

                                {{-- VIEW USER ACCOUNT ICON BUTTON --}}
                                <a href="{{ URL::to('local/' . $local->id) }}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" title="View User Account">
                                    <i class="material-icons mdl-color-text--blue">account_circle</i>
                                </a>

                                {{-- EDIT USER ICON BUTTON --}}
                                <a href="{{ URL::to('local/' . $local->id . '/edit') }}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons mdl-color-text--orange">edit</i>
                                </a>

                                {{-- DELETE ICON BUTTON AND FORM CALL --}}
                                {{-- {!! Form::open(array('url' => 'users/' . $user->id, 'class' => 'inline-block', 'id' => 'delete_'.$user->id)) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    <a href="#" class="dialog-button dialiog-trigger-delete dialiog-trigger{{$user->id}} mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-userid="{{$user->id}}">
                                        <i class="material-icons mdl-color-text--red">delete</i>
                                    </a>
                                {!! Form::close() !!} --}}
                            </td>
                        </tr>
                    @endforeach
              </tbody>
            </table>
        </div>
    </div>
    <div class="mdl-card__menu" style="top: -4px;">


    </div>
</div>

@include('dialogs.dialog-delete')

@endsection

@section('footer_scripts')
    @include('scripts.highlighter-script')
    @include('scripts.mdl-datatables')
   
@endsection