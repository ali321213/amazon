@extends('admin.app')

@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="tf-section-2 mb-30">
                <div class="flex gap20 flex-wrap-mobile">
                    <div class="w-half">

                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2">Total Orders</div>
                                        <h4>3</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-dollar-sign"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2">Total Amount</div>
                                        <h4>481.34</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2">Pending Orders</div>
                                        <h4>3</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-dollar-sign"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2">Pending Orders Amount</div>
                                        <h4>481.34</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="w-half">

                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2">Delivered Orders</div>
                                        <h4>0</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-dollar-sign"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2">Delivered Orders Amount</div>
                                        <h4>0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default mb-20">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2">Canceled Orders</div>
                                        <h4>0</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-dollar-sign"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2">Canceled Orders Amount</div>
                                        <h4>0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="wg-box">
                    <div class="flex items-center justify-between">
                        <h5>Earnings revenue</h5>
                        <div class="dropdown default">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a href="javascript:void(0);">This Week</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Last Week</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap40">
                        <div>
                            <div class="mb-2">
                                <div class="block-legend">
                                    <div class="dot t1"></div>
                                    <div class="text-tiny">Revenue</div>
                                </div>
                            </div>
                            <div class="flex items-center gap10">
                                <h4>$37,802</h4>
                                <div class="box-icon-trending up">
                                    <i class="icon-trending-up"></i>
                                    <div class="body-title number">0.56%</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mb-2">
                                <div class="block-legend">
                                    <div class="dot t2"></div>
                                    <div class="text-tiny">Order</div>
                                </div>
                            </div>
                            <div class="flex items-center gap10">
                                <h4>$28,305</h4>
                                <div class="box-icon-trending up">
                                    <i class="icon-trending-up"></i>
                                    <div class="body-title number">0.56%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="line-chart-8" style="min-height: 340px;">
                        <div id="apexcharts8934y9gz" class="apexcharts-canvas apexcharts8934y9gz apexcharts-theme-light" style="width: 616px; height: 325px;"><svg id="SvgjsSvg1199" width="616" height="325" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                        <foreignObject x="0" y="0" width="616" height="325">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 162.5px;"></div>
                                </foreignObject>

                                <g id="SvgjsG1388" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG1201" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 30)">
                                    <defs id="SvgjsDefs1200">
                                        <linearGradient id="SvgjsLinearGradient1203" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop1204" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1205" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1206" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMask8934y9gz">
                                            <rect id="SvgjsRect1208" width="598" height="262.42666718101503" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask8934y9gz"></clipPath>
                                        <clipPath id="nonForecastMask8934y9gz"></clipPath>
                                        <clipPath id="gridRectMarkerMask8934y9gz">
                                            <rect id="SvgjsRect1209" width="598" height="262.42666718101503" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1207" width="10" height="258.42666718101503" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1203)" class="apexcharts-xcrosshairs" y2="258.42666718101503" filter="none" fill-opacity="0.9"></rect>
                                    <line id="SvgjsLine1327" x1="0" y1="259.42666718101503" x2="0" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1328" x1="49.5" y1="259.42666718101503" x2="49.5" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1329" x1="99" y1="259.42666718101503" x2="99" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1330" x1="148.5" y1="259.42666718101503" x2="148.5" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1331" x1="198" y1="259.42666718101503" x2="198" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1332" x1="247.5" y1="259.42666718101503" x2="247.5" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1333" x1="297" y1="259.42666718101503" x2="297" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1334" x1="346.5" y1="259.42666718101503" x2="346.5" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1335" x1="396" y1="259.42666718101503" x2="396" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1336" x1="445.5" y1="259.42666718101503" x2="445.5" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1337" x1="495" y1="259.42666718101503" x2="495" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1338" x1="544.5" y1="259.42666718101503" x2="544.5" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1339" x1="594" y1="259.42666718101503" x2="594" y2="265.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <g id="SvgjsG1323" class="apexcharts-grid">
                                        <g id="SvgjsG1324" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1341" x1="0" y1="64.60666679525376" x2="594" y2="64.60666679525376" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1342" x1="0" y1="129.21333359050752" x2="594" y2="129.21333359050752" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1343" x1="0" y1="193.82000038576126" x2="594" y2="193.82000038576126" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1325" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1346" x1="0" y1="258.42666718101503" x2="594" y2="258.42666718101503" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1345" x1="0" y1="1" x2="0" y2="258.42666718101503" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1326" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1340" x1="0" y1="0" x2="594" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1344" x1="0" y1="258.42666718101503" x2="594" y2="258.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1387" x1="0" y1="259.42666718101503" x2="594" y2="259.42666718101503" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1210" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1211" class="apexcharts-series" rel="1" seriesName="Total" data:realIndex="0">
                                            <path id="SvgjsPath1216" d="M 4.75 258.427667181015 L 4.75 258.427667181015 L 14.75 258.427667181015 L 14.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 4.75 258.427667181015 L 4.75 258.427667181015 L 14.75 258.427667181015 L 14.75 258.427667181015 Z" pathFrom="M 4.75 258.427667181015 L 4.75 258.427667181015 L 14.75 258.427667181015 L 14.75 258.427667181015 L 14.75 258.427667181015 L 14.75 258.427667181015 L 14.75 258.427667181015 L 4.75 258.427667181015 Z" cy="258.42666718101503" cx="54.25" j="0" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1218" d="M 54.25 258.427667181015 L 54.25 258.427667181015 L 64.25 258.427667181015 L 64.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 54.25 258.427667181015 L 54.25 258.427667181015 L 64.25 258.427667181015 L 64.25 258.427667181015 Z" pathFrom="M 54.25 258.427667181015 L 54.25 258.427667181015 L 64.25 258.427667181015 L 64.25 258.427667181015 L 64.25 258.427667181015 L 64.25 258.427667181015 L 64.25 258.427667181015 L 54.25 258.427667181015 Z" cy="258.42666718101503" cx="103.75" j="1" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1220" d="M 103.75 258.427667181015 L 103.75 258.427667181015 L 113.75 258.427667181015 L 113.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 103.75 258.427667181015 L 103.75 258.427667181015 L 113.75 258.427667181015 L 113.75 258.427667181015 Z" pathFrom="M 103.75 258.427667181015 L 103.75 258.427667181015 L 113.75 258.427667181015 L 113.75 258.427667181015 L 113.75 258.427667181015 L 113.75 258.427667181015 L 113.75 258.427667181015 L 103.75 258.427667181015 Z" cy="258.42666718101503" cx="153.25" j="2" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1222" d="M 153.25 258.427667181015 L 153.25 258.427667181015 L 163.25 258.427667181015 L 163.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 153.25 258.427667181015 L 153.25 258.427667181015 L 163.25 258.427667181015 L 163.25 258.427667181015 Z" pathFrom="M 153.25 258.427667181015 L 153.25 258.427667181015 L 163.25 258.427667181015 L 163.25 258.427667181015 L 163.25 258.427667181015 L 163.25 258.427667181015 L 163.25 258.427667181015 L 153.25 258.427667181015 Z" cy="258.42666718101503" cx="202.75" j="3" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1224" d="M 202.75 258.427667181015 L 202.75 258.427667181015 L 212.75 258.427667181015 L 212.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 202.75 258.427667181015 L 202.75 258.427667181015 L 212.75 258.427667181015 L 212.75 258.427667181015 Z" pathFrom="M 202.75 258.427667181015 L 202.75 258.427667181015 L 212.75 258.427667181015 L 212.75 258.427667181015 L 212.75 258.427667181015 L 212.75 258.427667181015 L 212.75 258.427667181015 L 202.75 258.427667181015 Z" cy="258.42666718101503" cx="252.25" j="4" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1226" d="M 252.25 258.427667181015 L 252.25 6.258617155311664 L 262.25 6.258617155311664 L 262.25 258.427667181015 Z" fill="rgba(35,119,252,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 252.25 258.427667181015 L 252.25 6.258617155311664 L 262.25 6.258617155311664 L 262.25 258.427667181015 Z" pathFrom="M 252.25 258.427667181015 L 252.25 258.427667181015 L 262.25 258.427667181015 L 262.25 258.427667181015 L 262.25 258.427667181015 L 262.25 258.427667181015 L 262.25 258.427667181015 L 252.25 258.427667181015 Z" cy="6.257617155311664" cx="301.75" j="5" val="273.22" barHeight="252.16905002570337" barWidth="10"></path>
                                            <path id="SvgjsPath1228" d="M 301.75 258.427667181015 L 301.75 66.3428172748977 L 311.75 66.3428172748977 L 311.75 258.427667181015 Z" fill="rgba(35,119,252,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 301.75 258.427667181015 L 301.75 66.3428172748977 L 311.75 66.3428172748977 L 311.75 258.427667181015 Z" pathFrom="M 301.75 258.427667181015 L 301.75 258.427667181015 L 311.75 258.427667181015 L 311.75 258.427667181015 L 311.75 258.427667181015 L 311.75 258.427667181015 L 311.75 258.427667181015 L 301.75 258.427667181015 Z" cy="66.34181727489769" cx="351.25" j="6" val="208.12" barHeight="192.08484990611734" barWidth="10"></path>
                                            <path id="SvgjsPath1230" d="M 351.25 258.427667181015 L 351.25 258.427667181015 L 361.25 258.427667181015 L 361.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 351.25 258.427667181015 L 351.25 258.427667181015 L 361.25 258.427667181015 L 361.25 258.427667181015 Z" pathFrom="M 351.25 258.427667181015 L 351.25 258.427667181015 L 361.25 258.427667181015 L 361.25 258.427667181015 L 361.25 258.427667181015 L 361.25 258.427667181015 L 361.25 258.427667181015 L 351.25 258.427667181015 Z" cy="258.42666718101503" cx="400.75" j="7" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1232" d="M 400.75 258.427667181015 L 400.75 258.427667181015 L 410.75 258.427667181015 L 410.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 400.75 258.427667181015 L 400.75 258.427667181015 L 410.75 258.427667181015 L 410.75 258.427667181015 Z" pathFrom="M 400.75 258.427667181015 L 400.75 258.427667181015 L 410.75 258.427667181015 L 410.75 258.427667181015 L 410.75 258.427667181015 L 410.75 258.427667181015 L 410.75 258.427667181015 L 400.75 258.427667181015 Z" cy="258.42666718101503" cx="450.25" j="8" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1234" d="M 450.25 258.427667181015 L 450.25 258.427667181015 L 460.25 258.427667181015 L 460.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 450.25 258.427667181015 L 450.25 258.427667181015 L 460.25 258.427667181015 L 460.25 258.427667181015 Z" pathFrom="M 450.25 258.427667181015 L 450.25 258.427667181015 L 460.25 258.427667181015 L 460.25 258.427667181015 L 460.25 258.427667181015 L 460.25 258.427667181015 L 460.25 258.427667181015 L 450.25 258.427667181015 Z" cy="258.42666718101503" cx="499.75" j="9" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1236" d="M 499.75 258.427667181015 L 499.75 258.427667181015 L 509.75 258.427667181015 L 509.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 499.75 258.427667181015 L 499.75 258.427667181015 L 509.75 258.427667181015 L 509.75 258.427667181015 Z" pathFrom="M 499.75 258.427667181015 L 499.75 258.427667181015 L 509.75 258.427667181015 L 509.75 258.427667181015 L 509.75 258.427667181015 L 509.75 258.427667181015 L 509.75 258.427667181015 L 499.75 258.427667181015 Z" cy="258.42666718101503" cx="549.25" j="10" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1238" d="M 549.25 258.427667181015 L 549.25 258.427667181015 L 559.25 258.427667181015 L 559.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 549.25 258.427667181015 L 549.25 258.427667181015 L 559.25 258.427667181015 L 559.25 258.427667181015 Z" pathFrom="M 549.25 258.427667181015 L 549.25 258.427667181015 L 559.25 258.427667181015 L 559.25 258.427667181015 L 559.25 258.427667181015 L 559.25 258.427667181015 L 559.25 258.427667181015 L 549.25 258.427667181015 Z" cy="258.42666718101503" cx="598.75" j="11" val="0" barHeight="0" barWidth="10"></path>
                                            <g id="SvgjsG1213" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG1215" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1217" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1219" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1221" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1223" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1225" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1227" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1229" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1231" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1233" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1235" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1237" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                            </g>
                                            <g id="SvgjsG1214" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                        </g>
                                        <g id="SvgjsG1239" class="apexcharts-series" rel="2" seriesName="Pending" data:realIndex="1">
                                            <path id="SvgjsPath1244" d="M 14.75 258.427667181015 L 14.75 258.427667181015 L 24.75 258.427667181015 L 24.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 14.75 258.427667181015 L 14.75 258.427667181015 L 24.75 258.427667181015 L 24.75 258.427667181015 Z" pathFrom="M 14.75 258.427667181015 L 14.75 258.427667181015 L 24.75 258.427667181015 L 24.75 258.427667181015 L 24.75 258.427667181015 L 24.75 258.427667181015 L 24.75 258.427667181015 L 14.75 258.427667181015 Z" cy="258.42666718101503" cx="64.25" j="0" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1246" d="M 64.25 258.427667181015 L 64.25 258.427667181015 L 74.25 258.427667181015 L 74.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 64.25 258.427667181015 L 64.25 258.427667181015 L 74.25 258.427667181015 L 74.25 258.427667181015 Z" pathFrom="M 64.25 258.427667181015 L 64.25 258.427667181015 L 74.25 258.427667181015 L 74.25 258.427667181015 L 74.25 258.427667181015 L 74.25 258.427667181015 L 74.25 258.427667181015 L 64.25 258.427667181015 Z" cy="258.42666718101503" cx="113.75" j="1" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1248" d="M 113.75 258.427667181015 L 113.75 258.427667181015 L 123.75 258.427667181015 L 123.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 113.75 258.427667181015 L 113.75 258.427667181015 L 123.75 258.427667181015 L 123.75 258.427667181015 Z" pathFrom="M 113.75 258.427667181015 L 113.75 258.427667181015 L 123.75 258.427667181015 L 123.75 258.427667181015 L 123.75 258.427667181015 L 123.75 258.427667181015 L 123.75 258.427667181015 L 113.75 258.427667181015 Z" cy="258.42666718101503" cx="163.25" j="2" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1250" d="M 163.25 258.427667181015 L 163.25 258.427667181015 L 173.25 258.427667181015 L 173.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 163.25 258.427667181015 L 163.25 258.427667181015 L 173.25 258.427667181015 L 173.25 258.427667181015 Z" pathFrom="M 163.25 258.427667181015 L 163.25 258.427667181015 L 173.25 258.427667181015 L 173.25 258.427667181015 L 173.25 258.427667181015 L 173.25 258.427667181015 L 173.25 258.427667181015 L 163.25 258.427667181015 Z" cy="258.42666718101503" cx="212.75" j="3" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1252" d="M 212.75 258.427667181015 L 212.75 258.427667181015 L 222.75 258.427667181015 L 222.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 212.75 258.427667181015 L 212.75 258.427667181015 L 222.75 258.427667181015 L 222.75 258.427667181015 Z" pathFrom="M 212.75 258.427667181015 L 212.75 258.427667181015 L 222.75 258.427667181015 L 222.75 258.427667181015 L 222.75 258.427667181015 L 222.75 258.427667181015 L 222.75 258.427667181015 L 212.75 258.427667181015 Z" cy="258.42666718101503" cx="262.25" j="4" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1254" d="M 262.25 258.427667181015 L 262.25 6.258617155311664 L 272.25 6.258617155311664 L 272.25 258.427667181015 Z" fill="rgba(255,165,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 262.25 258.427667181015 L 262.25 6.258617155311664 L 272.25 6.258617155311664 L 272.25 258.427667181015 Z" pathFrom="M 262.25 258.427667181015 L 262.25 258.427667181015 L 272.25 258.427667181015 L 272.25 258.427667181015 L 272.25 258.427667181015 L 272.25 258.427667181015 L 272.25 258.427667181015 L 262.25 258.427667181015 Z" cy="6.257617155311664" cx="311.75" j="5" val="273.22" barHeight="252.16905002570337" barWidth="10"></path>
                                            <path id="SvgjsPath1256" d="M 311.75 258.427667181015 L 311.75 66.3428172748977 L 321.75 66.3428172748977 L 321.75 258.427667181015 Z" fill="rgba(255,165,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 311.75 258.427667181015 L 311.75 66.3428172748977 L 321.75 66.3428172748977 L 321.75 258.427667181015 Z" pathFrom="M 311.75 258.427667181015 L 311.75 258.427667181015 L 321.75 258.427667181015 L 321.75 258.427667181015 L 321.75 258.427667181015 L 321.75 258.427667181015 L 321.75 258.427667181015 L 311.75 258.427667181015 Z" cy="66.34181727489769" cx="361.25" j="6" val="208.12" barHeight="192.08484990611734" barWidth="10"></path>
                                            <path id="SvgjsPath1258" d="M 361.25 258.427667181015 L 361.25 258.427667181015 L 371.25 258.427667181015 L 371.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 361.25 258.427667181015 L 361.25 258.427667181015 L 371.25 258.427667181015 L 371.25 258.427667181015 Z" pathFrom="M 361.25 258.427667181015 L 361.25 258.427667181015 L 371.25 258.427667181015 L 371.25 258.427667181015 L 371.25 258.427667181015 L 371.25 258.427667181015 L 371.25 258.427667181015 L 361.25 258.427667181015 Z" cy="258.42666718101503" cx="410.75" j="7" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1260" d="M 410.75 258.427667181015 L 410.75 258.427667181015 L 420.75 258.427667181015 L 420.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 410.75 258.427667181015 L 410.75 258.427667181015 L 420.75 258.427667181015 L 420.75 258.427667181015 Z" pathFrom="M 410.75 258.427667181015 L 410.75 258.427667181015 L 420.75 258.427667181015 L 420.75 258.427667181015 L 420.75 258.427667181015 L 420.75 258.427667181015 L 420.75 258.427667181015 L 410.75 258.427667181015 Z" cy="258.42666718101503" cx="460.25" j="8" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1262" d="M 460.25 258.427667181015 L 460.25 258.427667181015 L 470.25 258.427667181015 L 470.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 460.25 258.427667181015 L 460.25 258.427667181015 L 470.25 258.427667181015 L 470.25 258.427667181015 Z" pathFrom="M 460.25 258.427667181015 L 460.25 258.427667181015 L 470.25 258.427667181015 L 470.25 258.427667181015 L 470.25 258.427667181015 L 470.25 258.427667181015 L 470.25 258.427667181015 L 460.25 258.427667181015 Z" cy="258.42666718101503" cx="509.75" j="9" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1264" d="M 509.75 258.427667181015 L 509.75 258.427667181015 L 519.75 258.427667181015 L 519.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 509.75 258.427667181015 L 509.75 258.427667181015 L 519.75 258.427667181015 L 519.75 258.427667181015 Z" pathFrom="M 509.75 258.427667181015 L 509.75 258.427667181015 L 519.75 258.427667181015 L 519.75 258.427667181015 L 519.75 258.427667181015 L 519.75 258.427667181015 L 519.75 258.427667181015 L 509.75 258.427667181015 Z" cy="258.42666718101503" cx="559.25" j="10" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1266" d="M 559.25 258.427667181015 L 559.25 258.427667181015 L 569.25 258.427667181015 L 569.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 559.25 258.427667181015 L 559.25 258.427667181015 L 569.25 258.427667181015 L 569.25 258.427667181015 Z" pathFrom="M 559.25 258.427667181015 L 559.25 258.427667181015 L 569.25 258.427667181015 L 569.25 258.427667181015 L 569.25 258.427667181015 L 569.25 258.427667181015 L 569.25 258.427667181015 L 559.25 258.427667181015 Z" cy="258.42666718101503" cx="608.75" j="11" val="0" barHeight="0" barWidth="10"></path>
                                            <g id="SvgjsG1241" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG1243" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1245" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1247" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1249" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1251" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1253" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1255" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1257" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1259" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1261" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1263" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1265" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                            </g>
                                            <g id="SvgjsG1242" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                        </g>
                                        <g id="SvgjsG1267" class="apexcharts-series" rel="3" seriesName="Delivered" data:realIndex="2">
                                            <path id="SvgjsPath1272" d="M 24.75 258.427667181015 L 24.75 258.427667181015 L 34.75 258.427667181015 L 34.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 24.75 258.427667181015 L 24.75 258.427667181015 L 34.75 258.427667181015 L 34.75 258.427667181015 Z" pathFrom="M 24.75 258.427667181015 L 24.75 258.427667181015 L 34.75 258.427667181015 L 34.75 258.427667181015 L 34.75 258.427667181015 L 34.75 258.427667181015 L 34.75 258.427667181015 L 24.75 258.427667181015 Z" cy="258.42666718101503" cx="74.25" j="0" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1274" d="M 74.25 258.427667181015 L 74.25 258.427667181015 L 84.25 258.427667181015 L 84.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 74.25 258.427667181015 L 74.25 258.427667181015 L 84.25 258.427667181015 L 84.25 258.427667181015 Z" pathFrom="M 74.25 258.427667181015 L 74.25 258.427667181015 L 84.25 258.427667181015 L 84.25 258.427667181015 L 84.25 258.427667181015 L 84.25 258.427667181015 L 84.25 258.427667181015 L 74.25 258.427667181015 Z" cy="258.42666718101503" cx="123.75" j="1" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1276" d="M 123.75 258.427667181015 L 123.75 258.427667181015 L 133.75 258.427667181015 L 133.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 123.75 258.427667181015 L 123.75 258.427667181015 L 133.75 258.427667181015 L 133.75 258.427667181015 Z" pathFrom="M 123.75 258.427667181015 L 123.75 258.427667181015 L 133.75 258.427667181015 L 133.75 258.427667181015 L 133.75 258.427667181015 L 133.75 258.427667181015 L 133.75 258.427667181015 L 123.75 258.427667181015 Z" cy="258.42666718101503" cx="173.25" j="2" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1278" d="M 173.25 258.427667181015 L 173.25 258.427667181015 L 183.25 258.427667181015 L 183.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 173.25 258.427667181015 L 173.25 258.427667181015 L 183.25 258.427667181015 L 183.25 258.427667181015 Z" pathFrom="M 173.25 258.427667181015 L 173.25 258.427667181015 L 183.25 258.427667181015 L 183.25 258.427667181015 L 183.25 258.427667181015 L 183.25 258.427667181015 L 183.25 258.427667181015 L 173.25 258.427667181015 Z" cy="258.42666718101503" cx="222.75" j="3" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1280" d="M 222.75 258.427667181015 L 222.75 258.427667181015 L 232.75 258.427667181015 L 232.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 222.75 258.427667181015 L 222.75 258.427667181015 L 232.75 258.427667181015 L 232.75 258.427667181015 Z" pathFrom="M 222.75 258.427667181015 L 222.75 258.427667181015 L 232.75 258.427667181015 L 232.75 258.427667181015 L 232.75 258.427667181015 L 232.75 258.427667181015 L 232.75 258.427667181015 L 222.75 258.427667181015 Z" cy="258.42666718101503" cx="272.25" j="4" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1282" d="M 272.25 258.427667181015 L 272.25 258.427667181015 L 282.25 258.427667181015 L 282.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 272.25 258.427667181015 L 272.25 258.427667181015 L 282.25 258.427667181015 L 282.25 258.427667181015 Z" pathFrom="M 272.25 258.427667181015 L 272.25 258.427667181015 L 282.25 258.427667181015 L 282.25 258.427667181015 L 282.25 258.427667181015 L 282.25 258.427667181015 L 282.25 258.427667181015 L 272.25 258.427667181015 Z" cy="258.42666718101503" cx="321.75" j="5" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1284" d="M 321.75 258.427667181015 L 321.75 258.427667181015 L 331.75 258.427667181015 L 331.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 321.75 258.427667181015 L 321.75 258.427667181015 L 331.75 258.427667181015 L 331.75 258.427667181015 Z" pathFrom="M 321.75 258.427667181015 L 321.75 258.427667181015 L 331.75 258.427667181015 L 331.75 258.427667181015 L 331.75 258.427667181015 L 331.75 258.427667181015 L 331.75 258.427667181015 L 321.75 258.427667181015 Z" cy="258.42666718101503" cx="371.25" j="6" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1286" d="M 371.25 258.427667181015 L 371.25 258.427667181015 L 381.25 258.427667181015 L 381.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 371.25 258.427667181015 L 371.25 258.427667181015 L 381.25 258.427667181015 L 381.25 258.427667181015 Z" pathFrom="M 371.25 258.427667181015 L 371.25 258.427667181015 L 381.25 258.427667181015 L 381.25 258.427667181015 L 381.25 258.427667181015 L 381.25 258.427667181015 L 381.25 258.427667181015 L 371.25 258.427667181015 Z" cy="258.42666718101503" cx="420.75" j="7" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1288" d="M 420.75 258.427667181015 L 420.75 258.427667181015 L 430.75 258.427667181015 L 430.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 420.75 258.427667181015 L 420.75 258.427667181015 L 430.75 258.427667181015 L 430.75 258.427667181015 Z" pathFrom="M 420.75 258.427667181015 L 420.75 258.427667181015 L 430.75 258.427667181015 L 430.75 258.427667181015 L 430.75 258.427667181015 L 430.75 258.427667181015 L 430.75 258.427667181015 L 420.75 258.427667181015 Z" cy="258.42666718101503" cx="470.25" j="8" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1290" d="M 470.25 258.427667181015 L 470.25 258.427667181015 L 480.25 258.427667181015 L 480.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 470.25 258.427667181015 L 470.25 258.427667181015 L 480.25 258.427667181015 L 480.25 258.427667181015 Z" pathFrom="M 470.25 258.427667181015 L 470.25 258.427667181015 L 480.25 258.427667181015 L 480.25 258.427667181015 L 480.25 258.427667181015 L 480.25 258.427667181015 L 480.25 258.427667181015 L 470.25 258.427667181015 Z" cy="258.42666718101503" cx="519.75" j="9" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1292" d="M 519.75 258.427667181015 L 519.75 258.427667181015 L 529.75 258.427667181015 L 529.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 519.75 258.427667181015 L 519.75 258.427667181015 L 529.75 258.427667181015 L 529.75 258.427667181015 Z" pathFrom="M 519.75 258.427667181015 L 519.75 258.427667181015 L 529.75 258.427667181015 L 529.75 258.427667181015 L 529.75 258.427667181015 L 529.75 258.427667181015 L 529.75 258.427667181015 L 519.75 258.427667181015 Z" cy="258.42666718101503" cx="569.25" j="10" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1294" d="M 569.25 258.427667181015 L 569.25 258.427667181015 L 579.25 258.427667181015 L 579.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 569.25 258.427667181015 L 569.25 258.427667181015 L 579.25 258.427667181015 L 579.25 258.427667181015 Z" pathFrom="M 569.25 258.427667181015 L 569.25 258.427667181015 L 579.25 258.427667181015 L 579.25 258.427667181015 L 579.25 258.427667181015 L 579.25 258.427667181015 L 579.25 258.427667181015 L 569.25 258.427667181015 Z" cy="258.42666718101503" cx="618.75" j="11" val="0" barHeight="0" barWidth="10"></path>
                                            <g id="SvgjsG1269" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG1271" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1273" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1275" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1277" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1279" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1281" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1283" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1285" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1287" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1289" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1291" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1293" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                            </g>
                                            <g id="SvgjsG1270" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                        </g>
                                        <g id="SvgjsG1295" class="apexcharts-series" rel="4" seriesName="Canceled" data:realIndex="3">
                                            <path id="SvgjsPath1300" d="M 34.75 258.427667181015 L 34.75 258.427667181015 L 44.75 258.427667181015 L 44.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 34.75 258.427667181015 L 34.75 258.427667181015 L 44.75 258.427667181015 L 44.75 258.427667181015 Z" pathFrom="M 34.75 258.427667181015 L 34.75 258.427667181015 L 44.75 258.427667181015 L 44.75 258.427667181015 L 44.75 258.427667181015 L 44.75 258.427667181015 L 44.75 258.427667181015 L 34.75 258.427667181015 Z" cy="258.42666718101503" cx="84.25" j="0" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1302" d="M 84.25 258.427667181015 L 84.25 258.427667181015 L 94.25 258.427667181015 L 94.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 84.25 258.427667181015 L 84.25 258.427667181015 L 94.25 258.427667181015 L 94.25 258.427667181015 Z" pathFrom="M 84.25 258.427667181015 L 84.25 258.427667181015 L 94.25 258.427667181015 L 94.25 258.427667181015 L 94.25 258.427667181015 L 94.25 258.427667181015 L 94.25 258.427667181015 L 84.25 258.427667181015 Z" cy="258.42666718101503" cx="133.75" j="1" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1304" d="M 133.75 258.427667181015 L 133.75 258.427667181015 L 143.75 258.427667181015 L 143.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 133.75 258.427667181015 L 133.75 258.427667181015 L 143.75 258.427667181015 L 143.75 258.427667181015 Z" pathFrom="M 133.75 258.427667181015 L 133.75 258.427667181015 L 143.75 258.427667181015 L 143.75 258.427667181015 L 143.75 258.427667181015 L 143.75 258.427667181015 L 143.75 258.427667181015 L 133.75 258.427667181015 Z" cy="258.42666718101503" cx="183.25" j="2" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1306" d="M 183.25 258.427667181015 L 183.25 258.427667181015 L 193.25 258.427667181015 L 193.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 183.25 258.427667181015 L 183.25 258.427667181015 L 193.25 258.427667181015 L 193.25 258.427667181015 Z" pathFrom="M 183.25 258.427667181015 L 183.25 258.427667181015 L 193.25 258.427667181015 L 193.25 258.427667181015 L 193.25 258.427667181015 L 193.25 258.427667181015 L 193.25 258.427667181015 L 183.25 258.427667181015 Z" cy="258.42666718101503" cx="232.75" j="3" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1308" d="M 232.75 258.427667181015 L 232.75 258.427667181015 L 242.75 258.427667181015 L 242.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 232.75 258.427667181015 L 232.75 258.427667181015 L 242.75 258.427667181015 L 242.75 258.427667181015 Z" pathFrom="M 232.75 258.427667181015 L 232.75 258.427667181015 L 242.75 258.427667181015 L 242.75 258.427667181015 L 242.75 258.427667181015 L 242.75 258.427667181015 L 242.75 258.427667181015 L 232.75 258.427667181015 Z" cy="258.42666718101503" cx="282.25" j="4" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1310" d="M 282.25 258.427667181015 L 282.25 258.427667181015 L 292.25 258.427667181015 L 292.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 282.25 258.427667181015 L 282.25 258.427667181015 L 292.25 258.427667181015 L 292.25 258.427667181015 Z" pathFrom="M 282.25 258.427667181015 L 282.25 258.427667181015 L 292.25 258.427667181015 L 292.25 258.427667181015 L 292.25 258.427667181015 L 292.25 258.427667181015 L 292.25 258.427667181015 L 282.25 258.427667181015 Z" cy="258.42666718101503" cx="331.75" j="5" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1312" d="M 331.75 258.427667181015 L 331.75 258.427667181015 L 341.75 258.427667181015 L 341.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 331.75 258.427667181015 L 331.75 258.427667181015 L 341.75 258.427667181015 L 341.75 258.427667181015 Z" pathFrom="M 331.75 258.427667181015 L 331.75 258.427667181015 L 341.75 258.427667181015 L 341.75 258.427667181015 L 341.75 258.427667181015 L 341.75 258.427667181015 L 341.75 258.427667181015 L 331.75 258.427667181015 Z" cy="258.42666718101503" cx="381.25" j="6" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1314" d="M 381.25 258.427667181015 L 381.25 258.427667181015 L 391.25 258.427667181015 L 391.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 381.25 258.427667181015 L 381.25 258.427667181015 L 391.25 258.427667181015 L 391.25 258.427667181015 Z" pathFrom="M 381.25 258.427667181015 L 381.25 258.427667181015 L 391.25 258.427667181015 L 391.25 258.427667181015 L 391.25 258.427667181015 L 391.25 258.427667181015 L 391.25 258.427667181015 L 381.25 258.427667181015 Z" cy="258.42666718101503" cx="430.75" j="7" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1316" d="M 430.75 258.427667181015 L 430.75 258.427667181015 L 440.75 258.427667181015 L 440.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 430.75 258.427667181015 L 430.75 258.427667181015 L 440.75 258.427667181015 L 440.75 258.427667181015 Z" pathFrom="M 430.75 258.427667181015 L 430.75 258.427667181015 L 440.75 258.427667181015 L 440.75 258.427667181015 L 440.75 258.427667181015 L 440.75 258.427667181015 L 440.75 258.427667181015 L 430.75 258.427667181015 Z" cy="258.42666718101503" cx="480.25" j="8" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1318" d="M 480.25 258.427667181015 L 480.25 258.427667181015 L 490.25 258.427667181015 L 490.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 480.25 258.427667181015 L 480.25 258.427667181015 L 490.25 258.427667181015 L 490.25 258.427667181015 Z" pathFrom="M 480.25 258.427667181015 L 480.25 258.427667181015 L 490.25 258.427667181015 L 490.25 258.427667181015 L 490.25 258.427667181015 L 490.25 258.427667181015 L 490.25 258.427667181015 L 480.25 258.427667181015 Z" cy="258.42666718101503" cx="529.75" j="9" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1320" d="M 529.75 258.427667181015 L 529.75 258.427667181015 L 539.75 258.427667181015 L 539.75 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 529.75 258.427667181015 L 529.75 258.427667181015 L 539.75 258.427667181015 L 539.75 258.427667181015 Z" pathFrom="M 529.75 258.427667181015 L 529.75 258.427667181015 L 539.75 258.427667181015 L 539.75 258.427667181015 L 539.75 258.427667181015 L 539.75 258.427667181015 L 539.75 258.427667181015 L 529.75 258.427667181015 Z" cy="258.42666718101503" cx="579.25" j="10" val="0" barHeight="0" barWidth="10"></path>
                                            <path id="SvgjsPath1322" d="M 579.25 258.427667181015 L 579.25 258.427667181015 L 589.25 258.427667181015 L 589.25 258.427667181015 Z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="3" clip-path="url(#gridRectMask8934y9gz)" pathTo="M 579.25 258.427667181015 L 579.25 258.427667181015 L 589.25 258.427667181015 L 589.25 258.427667181015 Z" pathFrom="M 579.25 258.427667181015 L 579.25 258.427667181015 L 589.25 258.427667181015 L 589.25 258.427667181015 L 589.25 258.427667181015 L 589.25 258.427667181015 L 589.25 258.427667181015 L 579.25 258.427667181015 Z" cy="258.42666718101503" cx="628.75" j="11" val="0" barHeight="0" barWidth="10"></path>
                                            <g id="SvgjsG1297" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG1299" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1301" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1303" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1305" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1307" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1309" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1311" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1313" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1315" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1317" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1319" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                                <g id="SvgjsG1321" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask8934y9gz)"></g>
                                            </g>
                                            <g id="SvgjsG1298" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                        </g>
                                        <g id="SvgjsG1212" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                        <g id="SvgjsG1240" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="1"></g>
                                        <g id="SvgjsG1268" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="2"></g>
                                        <g id="SvgjsG1296" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="3"></g>
                                    </g>
                                    <line id="SvgjsLine1347" x1="0" y1="0" x2="594" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1348" x1="0" y1="0" x2="594" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1349" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1350" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1352" font-family="Helvetica, Arial, sans-serif" x="24.75" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1353">Jan</tspan>
                                                <title>Jan</title>
                                            </text><text id="SvgjsText1355" font-family="Helvetica, Arial, sans-serif" x="74.25" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1356">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText1358" font-family="Helvetica, Arial, sans-serif" x="123.75" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1359">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText1361" font-family="Helvetica, Arial, sans-serif" x="173.25" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1362">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1364" font-family="Helvetica, Arial, sans-serif" x="222.75" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1365">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1367" font-family="Helvetica, Arial, sans-serif" x="272.25" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1368">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1370" font-family="Helvetica, Arial, sans-serif" x="321.75" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1371">Jul</tspan>
                                                <title>Jul</title>
                                            </text><text id="SvgjsText1373" font-family="Helvetica, Arial, sans-serif" x="371.25" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1374">Aug</tspan>
                                                <title>Aug</title>
                                            </text><text id="SvgjsText1376" font-family="Helvetica, Arial, sans-serif" x="420.75" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1377">Sep</tspan>
                                                <title>Sep</title>
                                            </text><text id="SvgjsText1379" font-family="Helvetica, Arial, sans-serif" x="470.25" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1380">Oct</tspan>
                                                <title>Oct</title>
                                            </text><text id="SvgjsText1382" font-family="Helvetica, Arial, sans-serif" x="519.75" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1383">Nov</tspan>
                                                <title>Nov</title>
                                            </text><text id="SvgjsText1385" font-family="Helvetica, Arial, sans-serif" x="569.25" y="287.42666718101503" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#212529" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1386">Dec</tspan>
                                                <title>Dec</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1389" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1390" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1391" class="apexcharts-point-annotations"></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(35, 119, 252);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 165, 0);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(7, 132, 7);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 0, 0);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tf-section mb-30">

                <div class="wg-box">
                    <div class="flex items-center justify-between">
                        <h5>Recent orders</h5>
                        <div class="dropdown default">
                            <a class="btn btn-secondary dropdown-toggle" href="#">
                                <span class="view-all">View all</span>
                            </a>
                        </div>
                    </div>
                    <div class="wg-table table-all-user">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 80px">OrderNo</th>
                                        <th>Name</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Subtotal</th>
                                        <th class="text-center">Tax</th>
                                        <th class="text-center">Total</th>

                                        <th class="text-center">Status</th>
                                        <th class="text-center">Order Date</th>
                                        <th class="text-center">Total Items</th>
                                        <th class="text-center">Delivered On</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Divyansh Kumar</td>
                                        <td class="text-center">1234567891</td>
                                        <td class="text-center">$172.00</td>
                                        <td class="text-center">$36.12</td>
                                        <td class="text-center">$208.12</td>

                                        <td class="text-center">ordered</td>
                                        <td class="text-center">2024-07-11 00:54:14</td>
                                        <td class="text-center">2</td>
                                        <td></td>
                                        <td class="text-center">
                                            <a href="#">
                                                <div class="list-icon-function view-icon">
                                                    <div class="item eye">
                                                        <i class="icon-eye"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bottom-page">
        <div class="body-text">Copyright © 2024 SurfsideMedia</div>
    </div>
</div>
@endsection