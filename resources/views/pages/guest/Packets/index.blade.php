@extends('layouts.guest.master-guest')

@section('content')
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
style="background-image: url({{ asset('assets/images/bg/02.jpg') }});">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-title-name">
        <h1>Packets</h1>
        <p>We know the secret of your success</p>
      </div>
      <ul class="page-breadcrumb">
        <li><a href=" {{ route('dashboard') }} "><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
        <li><a href="">Packets</a></li>
      </ul>
    </div>
  </div>
</div>
</section>


<section class="page-section-ptb white-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="mb-50">Pricing Table bootstrap default 4 column </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 mb-60">
                <ul class="price">
                    <li class="header">Silver</li>
                    <li class="grey">$ 9.99 / year</li>
                    <li><i class="fa fa-times float-left"></i> 10GB Storage <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-check float-left"></i> 10 Emails <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-times float-left"></i> 10 Domains <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-times float-left"></i> 1GB Bandwidth <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li class="grey"><a href="#" class="button">Sign Up</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 mb-60">
                <ul class="price active">
                    <li class="header">Gold</li>
                    <li class="grey">$ 24.99 / year</li>
                    <li><i class="fa fa-check float-left"></i> 25GB Storage <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-check float-left"></i> 25 Emails <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-check float-left"></i> 25 Domains <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-check float-left"></i> 2GB Bandwidth <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li class="grey"><a href="#" class="button">Sign Up</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 mb-60">
                <ul class="price">
                    <li class="header">Platinum</li>
                    <li class="grey">$ 49.99 / year</li>
                    <li><i class="fa fa-check float-left"></i> 50GB Storage <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-check float-left"></i> 50 Emails <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-check float-left"></i> 50 Domains <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-check float-left"></i> 5GB Bandwidth <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li class="grey"><a href="#" class="button">Sign Up</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 mb-60">
                <ul class="price">
                    <li class="header">Diamond</li>
                    <li class="grey">$ 49.99 / year</li>
                    <li><i class="fa fa-check float-left"></i> 50GB Storage <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-check float-left"></i> 50 Emails <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-check float-left"></i> 50 Domains <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li><i class="fa fa-check float-left"></i> 5GB Bandwidth <span
                        class="tooltip-content float-right" data-placement="top" data-toggle="tooltip"
                        data-original-title="Lorem ipsum dolor sit amet"><i
                            class="fa fa-info float-left"></i></span></li>
                    <li class="grey"><a href="#" class="button">Sign Up</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="mb-50">Pricing tables, membership plans </h4>
            </div>
        </div>

        <div class="table-responsive">
            <div class="membership-pricing-table">
                <table>
                    <tbody>
                        <tr>
                            <th></th>
                            <th class="plan-header plan-header-free">
                                <div class="pricing-plan-name">FREE</div>
                                <div class="pricing-plan-price">
                                    <sup>$</sup>0<span>.00</span>
                                </div>
                                <div class="pricing-plan-period">month</div>
                            </th>
                            <th class="plan-header plan-header-blue">
                                <div class="pricing-plan-name">BASIC</div>
                                <div class="pricing-plan-price">
                                    <sup>$</sup>4<span>.99</span>
                                </div>
                                <div class="pricing-plan-period">month</div>
                            </th>
                            <th class="plan-header plan-header-blue">
                                <div class="pricing-plan-name">PLUS</div>
                                <div class="pricing-plan-price">
                                    <sup>$</sup>12<span>.95</span>
                                </div>
                                <div class="pricing-plan-period">month</div>
                            </th>
                            <th class="plan-header plan-header-standard">
                                <div class="header-plan-inner">
                                    <!--<span class="plan-head"> </span>-->
                                    <span class="recommended-plan-ribbon">RECOMMENDED</span>
                                    <div class="pricing-plan-name">STANDARD</div>
                                    <div class="pricing-plan-price">
                                        <sup>$</sup>34<span>.99</span>
                                    </div>
                                    <div class="pricing-plan-period">month</div>
                                </div>
                            </th>
                            <th class="plan-header plan-header-blue">
                                <div class="pricing-plan-name">PREMIUM</div>
                                <div class="pricing-plan-price">
                                    <sup>$</sup>99<span>.99</span>
                                </div>
                                <div class="pricing-plan-period">month</div>
                            </th>
                        </tr>
                        <tr>
                            <td></td>

                            <td class="action-header">
                                <a class="button x-small">
                                    Downgrade
                                </a>
                            </td>
                            <td class="action-header">
                                <a class="button x-small">
                                    Downgrade
                                </a>
                            </td>
                            <td class="action-header">
                                <div class="current-plan">
                                    <div class="with-date">Current Plan</div>
                                    <div><em class="smaller block">Renews Feb 19, 2018</em></div>
                                </div>
                            </td>
                            <td class="action-header">
                                <a class="button x-small">
                                    Upgrade
                                </a>
                            </td>
                            <td class="action-header">
                                <a class="button x-small">
                                    Upgrade
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tutorials and Support Docs:</td>
                            <td> <i class="fa fa-check-circle-o"></i> </td>
                            <td> <i class="fa fa-check-circle-o"></i> </td>
                            <td> <i class="fa fa-check-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                        </tr>
                        <tr>
                            <td>Support Forum Access:</td>
                            <td> <i class="fa fa-check-circle-o"></i> </td>
                            <td> <i class="fa fa-check-circle-o"></i> </td>
                            <td> <i class="fa fa-check-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                        </tr>
                        <tr>
                            <td>Automatic Updates:</td>
                            <td> <i class="fa fa-check-circle-o"></i> </td>
                            <td> <i class="fa fa-check-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                        </tr>
                        <tr>
                            <td>Unlock rewards:</td>
                            <td> <i class="fa fa-check-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                            <td> <i class="fa fa-times-circle-o"></i> </td>
                        </tr>
                        <tr>
                            <td>Skills:</td>
                            <td>20</td>
                            <td>30</td>
                            <td>50</td>
                            <td>80</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Websites:</td>
                            <td>1</td>
                            <td>5</td>
                            <td>10</td>
                            <td>20</td>
                            <td>unlimited</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
