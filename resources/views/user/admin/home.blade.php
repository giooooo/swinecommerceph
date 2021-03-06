
{{--  *REMOVE AFTER USER INTERFACE CHANGES ARE FINALIZED* --}}

{{--
    Displays Home page of Admin
--}}

@extends('layouts.adminLayout')

@section('title')
    | Admin
@endsection

@section('pageId')
    id="page-admin-home"
@endsection

{{-- @section('breadcrumbTitle')
    Home
@endsection --}}
@section('header')
    <h4 id='admin-content-panel-header'>Admin Dashboard</h4>
@endsection

@section('content')
    <div class="row">
        <a href="{{route('admin.userlist')}}" id="total-user-summary">
          <div class="col s6" >
            <div id="total-card" class="card-panel card-summary hoverable">
               <div class="center white-text row">
                  <div class="col s4 label-wrapper">
                     <div class="left">
                        <i class="ecommerce-icon">p</i>
                     </div>
                     <div class="">
                        <div class="summary-title">TOTAL USERS</div>
                     </div>
                  </div>

                   <div class="center white-text summary-data col s8 truncate tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$summary[0]}}">
                     {{$summary[0]}}
                   </div>
               </div>

            </div>
          </div>
        </a>
        <a href="{{route('admin.blocked.users')}}" id="total-blocked-summary">
           <div class="col s6" >
             <div id="blocked-card" class="card-panel card-summary hoverable">
                <div class="center white-text row">
                   <div class="col s4 label-wrapper">
                      <div class="">
                         <i class="ecommerce-icon">b</i>
                      </div>
                      <div class="">
                         <div class="summary-title">BLOCKED USERS</div>
                      </div>
                   </div>

                    <div class="center white-text summary-data col s8 truncate tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$summary[1]}}">
                      {{$summary[1]}}
                    </div>
                </div>
             </div>
           </div>
        </a>
        <a href="{{route('admin.pending.users')}}" id="total-pending-summary">
           <div class="col s6" >
             <div id="pending-card" class="card-panel card-summary hoverable">
                <div class="center white-text row">
                   <div class="col s4 label-wrapper">
                      <div class="">
                         <i class="ecommerce-icon">w</i>
                      </div>
                      <div class="">
                         <div class="summary-title">PENDING BREEDERS</div>
                      </div>
                   </div>

                   <div class="center white-text summary-data col s8 truncate tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$summary[2]}}">
                      {{$summary[2]}}
                   </div>
                </div>
             </div>
           </div>
        </a>
        <a href="#">
           <div class="col s6" >
             <div id="inquiries-card" class="card-panel card-summary hoverable">
                <div class="center white-text row">
                   <div class="col s4 label-wrapper">
                      <div class="left">
                         <i class="ecommerce-icon">u</i>
                      </div>
                      <div class="">
                         <div class="summary-title">Unread Messages</div>
                      </div>
                   </div>

                   <div class="center white-text summary-data col s8 truncate tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$summary[3]}}">
                      {{$summary[3]}}
                   </div>
                </div>
             </div>
           </div>
        </a>

        <a href="{{route('admin.statistics.dashboard')}}" id="site-statistics-summary">
           <div class="col s12" >
             <div id="statistics-card" class="card-panel card-summary hoverable">
                <div class="center white-text row">
                   <div class="col s4 label-wrapper">
                      <div class="center">
                         <i class="ecommerce-icon" id="statistics-icon">x</i>
                      </div>

                   </div>

                   <div class="center white-text col s8" id="statistics-title-wrapper">
                     <div  id="statistics-title">SITE STATISTICS</div>
                   </div>
                </div>
             </div>
           </div>
        </a>

    </div>

@endsection

@section('initScript')
    <script type="text/javascript" src="/js/admin/admin_custom.js"></script>
@endsection
