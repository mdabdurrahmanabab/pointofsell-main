@extends('layouts.admin')
@section('content')
    <section style="background-color: #D6EFC7; margin-top:20px;">
    <div class="row row-cols-1 row-cols-md-3 g-4 p-5">
        <div class="col p-2">
          <div class="card h-100 w-100 d-flex justify-content-center align-items-center">
            <a class="text-muted fs-3 text-decoration-none" href="{{url('dailyreports')}}">Daily Report</a>
            </div>
           
          </div>
          <div class="col p-2">
            <div class="card h-100 w-100 d-flex justify-content-center align-items-center">
                <a class="text-muted fs-3 text-decoration-none" href="">Weekly Report</a>
              </div>
            </div><div class="col p-2">
                <div class="card h-100 w-100 d-flex justify-content-center align-items-center">
                    <a class="text-muted fs-3 text-decoration-none p-3" href="">Monthly Report</a>
                  </div>
                </div><div class="col p-2">
                    <div class="card h-100 w-100 d-flex justify-content-center align-items-center">
                        <a class="text-muted fs-3 text-decoration-none p-3" href="">Yearly Report</a>
                      </div>
                    </div><div class="col p-2">
                        <div class="card h-100 w-100 d-flex justify-content-center align-items-center">
                            <a class="text-muted fs-3 text-decoration-none p-3" href="">Category wise Report</a>
                          </div>
                        </div><div class="col p-2">
                            <div class="card h-100 w-100 d-flex justify-content-center align-items-center">
                                <a class="text-muted fs-3 text-decoration-none p-3" href="">Supplier wise report</a>
                              </div>
                            </div><div class="col p-2">
                                <div class="card h-100 w-100 d-flex justify-content-center align-items-center">
                                    <a class="text-muted fs-3 text-decoration-none p-3" href="">Customer wise report</a>
                                  </div>
                                </div><div class="col p-2">
                                    <div class="card h-100 w-100 d-flex justify-content-center align-items-center">
                                        <a class="text-muted fs-3 text-decoration-none p-3" href="">Low inventory</a>
                                      </div>
                                    </div><div class="col p-2">
                                        <div class="card h-100 w-100 d-flex justify-content-center align-items-center">
                                            <a class="text-muted fs-3 text-decoration-none p-3" href="">Top selling products</a>
                                          </div>
                                        </div>
      </div>
    </section>
@endsection