@extends('layouts.app')

@section('content')
    <div class="wrapper ">
        <!-- SIDEBAR - START -->
        <div class="sidebar" data-color="" data-active-color="danger">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="{{asset('img/logo-form.png')}}">
                    </div>
                </a>
                <a href="/" class="simple-text logo-normal">il modulo</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="/orders/create">
                            <i class="fa fa-plus"></i>
                            <p>Create Order</p>
                        </a>
                    </li>
                    <li>
                        <a href="/orders">
                            <i class="fa fa-list-ul"></i>
                            <p>Past Orders</p>
                        </a>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#componentsExamples">
                            <i class="fa fa-edit"></i>
                            <p>Admin
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="componentsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="index.html">
                                        <span class="sidebar-mini-icon">&bull;</span>
                                        <span class="sidebar-normal"> Items </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <span class="sidebar-mini-icon">&bull;</span>
                                        <span class="sidebar-normal"> Users </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <span class="sidebar-mini-icon">&bull;</span>
                                        <span class="sidebar-normal"> Stores </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <span class="sidebar-mini-icon">&bull;</span>
                                        <span class="sidebar-normal"> Vendors </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <span class="sidebar-mini-icon">&bull;</span>
                                        <span class="sidebar-normal"> Sizes </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <span class="sidebar-mini-icon">&bull;</span>
                                        <span class="sidebar-normal"> Categories </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <span class="sidebar-mini-icon">&bull;</span>
                                        <span class="sidebar-normal"> User Roles </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-footer">
                        ©<script>document.write(new Date().getFullYear())</script> | Moticorp Creative
                    </li>
                </ul>
            </div>
        </div>
        <!-- SIDEBAR - END -->

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top" style="background-color:#fff;color:#333;">
                <div class="container-fluid">
                    <div class="navbar-wrapper full-height">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" style="background-color:#fff;color:#333;" href="#">il modulo</a>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="content">
                <!-- ORDERS TABLE -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title pull-left">Orders</h4>
                                <button type="button" class="btn btn-danger btn-just-icon pull-right">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Location</th>
                                                <th class="d-none d-sm-block">User</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Open</td>
                                                <td>07-05-18</td>
                                                <td>Lab</td>
                                                <td class="d-none d-sm-block">John J</td>
                                                <td class="text-right">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Open</td>
                                                <td>07-03-18</td>
                                                <td>Surfside</td>
                                                <td class="d-none d-sm-block">Darrell S</td>
                                                <td class="text-right">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Closed</td>
                                                <td>06-28-18</td>
                                                <td>N Myrtle</td>
                                                <td class="d-none d-sm-block">Jenn B</td>
                                                <td class="text-right">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " disabled data-original-title="" title="">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Closed</td>
                                                <td>06-25-18</td>
                                                <td>Folly</td>
                                                <td class="d-none d-sm-block">Dave E</td>
                                                <td class="text-right">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " disabled data-original-title="" title="">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Closed</td>
                                                <td>06-23-18</td>
                                                <td>Socastee</td>
                                                <td class="d-none d-sm-block">John A</td>
                                                <td class="text-right">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " disabled data-original-title="" title="">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Closed</td>
                                                <td>06-15-18</td>
                                                <td>Dunkin-VV</td>
                                                <td class="d-none d-sm-block">Mike B</td>
                                                <td class="text-right">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " disabled data-original-title="" title="">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- USERS FORM -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Create / Edit Users</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="First and Last Initial">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="Required for Admin + Managers">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="chekbox-title-dropdowns">
                                                User Role
                                            </div>
                                            <div class="form-check form-group">
                                                <select class="form-control" id="user_role">
                                                    <option>Staff</option>
                                                    <option>Manager</option>
                                                    <option>Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="chekbox-title-dropdowns">
                                                Status
                                            </div>
                                            <div class="form-check form-group">
                                                <select class="form-control" id="status">
                                                    <option>Active</option>
                                                    <option>Deactivated</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-danger btn-round">Save User</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- USERS TABLE -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title pull-left">Users</h4>
                                <button type="button" class="btn btn-danger btn-just-icon pull-right">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Name</th>
                                                <th class="d-none d-sm-block">Email</th>
                                                <th>Role</th>
                                                <th class="d-none d-sm-block">Status</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Joey B</td>
                                                <td class="d-none d-sm-block">joey@moticorp.com</td>
                                                <td>Admin</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Emily T</td>
                                                <td class="d-none d-sm-block">emily@moticorp.com</td>
                                                <td>Manager</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>John J</td>
                                                <td class="d-none d-sm-block">john@moticorp.com</td>
                                                <td>Staff</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sam H</td>
                                                <td class="d-none d-sm-block"></td>
                                                <td>Staff</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- USERS ROLES FORM -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Create / Edit User Roles</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name of Role">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-danger btn-round">Save Role</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- USER ROLES TABLE -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title pull-left">User Roles</h4>
                                <button type="button" class="btn btn-danger btn-just-icon pull-right">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Name</th>
                                                <th class="d-none d-sm-block">Status</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Staff</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Manager</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Admin</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STORES FORM -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Create / Edit Stores</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name of Store">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="chekbox-title-dropdowns">
                                                Status
                                            </div>
                                            <div class="form-check form-group">
                                                <select class="form-control" id="status">
                                                    <option>Active</option>
                                                    <option>Deactivated</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-danger btn-round">Save Store</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STORES TABLE -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title pull-left">Stores</h4>
                                <button type="button" class="btn btn-danger btn-just-icon pull-right">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Name</th>
                                                <th class="d-none d-sm-block">Status</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>VV-Seaboard</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>VV-North Myrtle</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>VV-Surfside</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>VV-Dunkin</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH-Seaboard</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH-Little River</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH-Socastee</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH-Folly</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH-Dunkin</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH-Old Town</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH-Saluda</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH-Old Trolley</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CATEGORIES FORM -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Create / Edit Categories</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name of Category">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="chekbox-title-dropdowns">
                                                Status
                                            </div>
                                            <div class="form-check form-group">
                                                <select class="form-control" id="status">
                                                    <option>Active</option>
                                                    <option>Deactivated</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-danger btn-round">Save Category</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CATEGORIES TABLE -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title pull-left">Categories</h4>
                                <button type="button" class="btn btn-danger btn-just-icon pull-right">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Name</th>
                                                <th class="d-none d-sm-block">Status</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Flavors</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Labels</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Supplies</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Juices</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Products</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VENDORS FORM -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Create / Edit Vendors</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name of Vendor">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Short Name</label>
                                                <input type="text" class="form-control" name="short_name" placeholder="Vendors Abbreviation, TFA, LA, etc">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="chekbox-title-dropdowns">
                                                Status
                                            </div>
                                            <div class="form-check form-group">
                                                <select class="form-control" id="status">
                                                    <option>Active</option>
                                                    <option>Deactivated</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-danger btn-round">Save Vendor</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VENDORS TABLE -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title pull-left">Vendors</h4>
                                <button type="button" class="btn btn-danger btn-just-icon pull-right">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Name</th>
                                                <th>Short Name</th>
                                                <th class="d-none d-sm-block">Status</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Capella</td>
                                                <td>CAP</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flavor West</td>
                                                <td>FW</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flavour Art</td>
                                                <td>FA</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mt Baker Vapor</td>
                                                <td>MBV</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lorann</td>
                                                <td>LA</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flavor Apprentice</td>
                                                <td>TFA</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SIZES FORM -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Create / Edit Sizes</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name of Size">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="chekbox-title-dropdowns">
                                                Status
                                            </div>
                                            <div class="form-check form-group">
                                                <select class="form-control" id="status">
                                                    <option>Active</option>
                                                    <option>Deactivated</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="chekbox-title">
                                                Category (All That Apply)
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="flavors">
                                                    Flavors
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="labels">
                                                    Labels
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="juices">
                                                    Juices
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="products">
                                                    Products
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="supplies">
                                                    Supplies
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-danger btn-round">Save Size</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SIZES TABLE -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title pull-left">Sizes</h4>
                                <button type="button" class="btn btn-danger btn-just-icon pull-right">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Name</th>
                                                <th>Cateogry</th>
                                                <th class="d-none d-sm-block">Status</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>16 oz</td>
                                                <td>Flavors</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>32 oz</td>
                                                <td>Flavors</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>64 oz</td>
                                                <td>Flavors</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1 gal</td>
                                                <td>Flavors</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2 gal</td>
                                                <td>Flavors</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1000</td>
                                                <td>Labels</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2000</td>
                                                <td>Labels</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3000</td>
                                                <td>Labels</td>
                                                <td class="d-none d-sm-block">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ITEMS FORM -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Create / Edit Items</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name of Item">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="chekbox-title-dropdowns">
                                                Status
                                            </div>
                                            <div class="form-check form-group">
                                                <select class="form-control" id="status">
                                                    <option>Active</option>
                                                    <option>Deactivated</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="chekbox-title">
                                                Category (All That Apply)
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="flavors">
                                                    Flavors
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="labels">
                                                    Labels
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="juices">
                                                    Juices
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="products">
                                                    Products
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="supplies">
                                                    Supplies
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="chekbox-title">
                                                Store (All That Apply)
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="VV-SB">
                                                    VV-Seaboard
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="VV-DD">
                                                    VV-Dunkin
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="VV-NM">
                                                    VV-N Myrtle
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="VV-SS">
                                                    VV-Surfside
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="PH-S">
                                                    PH-Socastee
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="PH-LR">
                                                    PH-Little River
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="PH-F">
                                                    PH-Folley
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="PH-OT">
                                                    PH-Old Towne
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="PH-S">
                                                    PH-Saluda
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline chekbox-align">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="PH-OT">
                                                    PH-Old Trolley
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="chekbox-title-dropdowns">
                                                Vendor (Flavors Only)
                                            </div>
                                            <div class="form-check form-group">
                                                <select class="form-control" id="status">
                                                    <option>None</option>
                                                    <option>The Flavor Apprentice</option>
                                                    <option>Mt Baker Vapor</option>
                                                    <option>Flavor West</option>
                                                    <option>Capella</option>
                                                    <option>Lorann</option>
                                                    <option>Flavour Art</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="chekbox-title">
                                                Drip Line (Juices Only)
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    Yes
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="0">
                                                    No
                                                    <span class="chekbox form-check-sign"></span>
                                                </label>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-danger btn-round">Save Item</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ITEMS TABLE -->
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title pull-left">Items</h4>
                                <button type="button" class="btn btn-danger btn-just-icon pull-right">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Name</th>
                                                <th class="d-none d-sm-table-cell">Category</th>
                                                <th class="d-none d-sm-table-cell">Status</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Serendipity</td>
                                                <td class="d-none d-sm-table-cell">Juices, Labels</td>
                                                <td class="d-none d-sm-table-cell">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Strawberry (Ripe)</td>
                                                <td class="d-none d-sm-table-cell">Flavors</td>
                                                <td class="d-none d-sm-table-cell">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>650 Starter Kits - Black</td>
                                                <td class="d-none d-sm-table-cell">Products</td>
                                                <td class="d-none d-sm-table-cell">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paper Towels</td>
                                                <td class="d-none d-sm-table-cell">Supplies</td>
                                                <td class="d-none d-sm-table-cell">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30mL Bottles - Black</td>
                                                <td class="d-none d-sm-table-cell">Supplies</td>
                                                <td class="d-none d-sm-table-cell">Active</td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-info btn-icon btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
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
