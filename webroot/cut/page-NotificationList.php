<?php include 'elements/_html_start.php' ?>

<?php include 'elements/_head.php' ?>

<?php include 'elements/side_menu.php' ?>

<main>

<div class="mt-8">
    <div class="container-fluid px-sm-8 d-flex align-items-center">
        <button class="btn btn-menu d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#side_menu" aria-controls="offcanvasExample">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
        </button>
        <button class="btn btn-outline-white btn-sm btn-back d-none d-lg-flex" type="button">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M17.51 3.87L15.73 2.1 5.84 12l9.9 9.9 1.77-1.77L9.38 12l8.13-8.13z"/></svg>
            <span class="text">Back</span>
        </button>
        <div class="ms-auto me-8">
            <button id="notificationsBtn" class="btn btn-icon">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/></svg>
                <span class="badge right">2</span>
            </button>
            <div class="position-absolute top-0 end-0 p-3" style="z-index:1;">
                <div id="notificationsToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <div class="heading me-auto">New Notifications</div>
                        <button type="button" class="btn-close ms-3" data-bs-dismiss="toast" aria-label="Close">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                        </button>
                    </div>
                    <div class="news-item">
                        <div class="news-image">
                            <img src="https://via.placeholder.com/30x45">
                        </div>
                        <div class="news-content">
                            <div class="title">A new player has beeen submitted for approval</div>
                            <div class="subtitle">Scott added Player Jed Murray to be approved</div>
                            <div class="date">15:04 26/01/21</div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-image">
                            <img src="https://via.placeholder.com/45x30">
                        </div>
                        <div class="news-content">
                            <div class="title">A new player has beeen submitted for approval</div>
                            <div class="subtitle">Scott added Player Jed Murray to be approved</div>
                            <div class="date">15:04 26/01/21</div>
                        </div>
                    </div>
                    <div class="news-item">
                        No more news
                    </div>
                    <div class="toast-footer">
                        <a href="#" class="btn btn-text">View all</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="user">
            <button class="btn btn-user" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <span class="avatar team">
                    <img src="https://via.placeholder.com/30x45">
                </span>
                <!-- <span class="avatar user">
                    <img src="https://via.placeholder.com/45">
                </span> -->
                <span class="text ms-3 me-auto">
                    <span class="name">Michael</span>
                    <span class="status">E.L.F. Admin</span>
                </span>
                <svg class="icon ms-3" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
            </button>
            <ul class="dropdown-menu dropdown-menu-end mt-2">
                <li><a class="btn dropdown-item" href="#">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"><g><path d="M0,0h24v24H0V0z" fill="none"/><path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"/></g></svg>
                    <span class="text">Settings</span>
                </a></li>
                <li><a class="btn dropdown-item" href="#">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
                    <span class="text">Logout</span>
                </a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid d-lg-none pt-8 px-sm-8 overflow-hidden">
    <button class="btn btn-outline-white btn-sm btn-back" type="button">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M17.51 3.87L15.73 2.1 5.84 12l9.9 9.9 1.77-1.77L9.38 12l8.13-8.13z"/></svg>
        <span class="text">Back</span>
    </button>
</div>

<div class="container-fluid pt-8 px-sm-8 overflow-hidden">
    <div class="row g-4 align-items-center mb-8">
        <div class="col-auto">
            <h2 class="fw-bold mb-0 me-4">Today’s Notifications</h2>
        </div>
        <div class="col-auto ms-auto">
            <div class="row gy-2 gx-6">
                <div class="col-auto">
                    <button class="btn btn-quinary text-white">
                        <span>Archived Notifications</span>
                    </button>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary text-white">
                        <span>Clear All Notifications</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-14">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th style="width: 0;"><div>Team</div></th>
                        <th><div class="title">Title</div></th>
                        <th><div class="dsc">Description</div></th>
                        <th><div>Created</div></th>
                        <th style="width: 0;"><div>Action</div></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- display a minimum of 5 rows. always display odd number of tr  -->
                    <tr>
                        <td><div class="avatar"><img src="../files/Players/Williams_Trent.png"></div></td>
                        <td><div class="title">A new player has been submitted for approval</div></td>
                        <td><div class="dsc">Scott added Player Jed Murray to be approved</div></td>
                        <td><div class="time">2 hrs ago</div></td>
                        <td><div>
                            <button class="btn btn-icon">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                <!-- <span class="badge left">4</span> -->
                            </button>
                            <button class="btn btn-icon btn-clear">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
                            </button>
                        </div></td>
                    </tr>
                    <tr>
                        <td><div class="avatar"><img src="../files/Players/Williams_Trent.png"></div></td>
                        <td><div class="title">A new player has been submitted for approval</div></td>
                        <td><div class="dsc">Scott added Player Jed Murray to be approved</div></td>
                        <td><div class="time">2 hrs ago</div></td>
                        <td><div>
                            <button class="btn btn-icon">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                <!-- <span class="badge left">4</span> -->
                            </button>
                        </div></td>
                    </tr>
                    <tr>
                        <td><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
                    </tr>
                    <tr>
                        <td><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
                    </tr>
                    <tr>
                        <td><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-between align-items-center g-4 pb-16">
        <div class="col-md-auto text-center">
            <div>1 of 4</div>
        </div>
        <div class="col-md-auto">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center d-sm-none m-0">
                    <li class="page-item"><a class="page-link" href="#"><<</a></li>
                    <li class="page-item"><a class="page-link" href="#"><</a></li>
                    <li class="page-item active">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="3">9</option>
                            <option value="3">456</option>
                        </select>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">></a></li>
                    <li class="page-item"><a class="page-link" href="#">>></a></li>
                </ul>
                <ul class="pagination justify-content-center d-none d-sm-flex m-0">
                    <!-- <li class="page-item"><a class="page-link" href="#"><< First</a></li> -->
                    <li class="page-item"><a class="page-link" href="#">< Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next ></a></li>
                    <li class="page-item"><a class="page-link" href="#">Last >></a></li>
                </ul>
            </nav>
        </div>

    </div>
</div>

</main>

<?php include 'elements/_footer_scripts.php' ?>

<?php include 'elements/_html_end.php' ?>