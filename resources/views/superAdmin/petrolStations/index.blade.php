@extends('superAdmin.layouts.main')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Petrol Stations</h4>
                        <a href="{{route('superAdmin_petrolStation_add')}}" type="submit" class="btn btn-outline-primary add-btn">Add New PetrolStation</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Manager</th>
                                    <th>Contact</th>
                                    <th>Area</th>
                                    <th>Email</th>
                                    <th>Creating Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>Architect</td>
                                    <td>Male</td>
                                    <td>M.COM., P.H.D.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2011/04/25</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Female</td>
                                    <td>M.COM., P.H.D.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2011/07/25</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2009/01/12</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Developer</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2012/03/29</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2008/11/28</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Specialist</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2012/12/02</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2012/08/06</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2010/10/14</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2009/09/15</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2008/12/13</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>Female</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2008/12/19</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2013/03/03</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2008/10/16</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2012/12/18</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2010/03/17</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2012/11/27</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Financial Officer</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2010/06/09</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2009/04/10</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2012/10/13</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2012/09/26</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2011/09/03</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>Marketing Officer</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2009/06/25</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2011/12/12</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2010/09/20</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Executive Officer</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2009/10/09</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Female</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2010/12/22</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Male</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2010/11/14</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>Female</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2011/06/07</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fiona Green</td>
                                    <td>Operating Officer</td>
                                    <td>Male</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2010/03/11</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Female</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td>2011/08/14</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
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
    </div>
@endsection
