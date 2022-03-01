<?php include 'elements/_html_start.php' ?>

<?php include 'elements/_head.php' ?>

<?php include 'elements/side_menu.php' ?>

<main>

    <?php include 'elements/top_bar.php' ?>

    <div class="container-fluid pt-8 px-sm-8 overflow-hidden">
        <form class="row g-4 g-lg-8 align-items-end mb-8">
            <div class="col-sm-6 col-xl-3">
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-sm-6 col-xl-3">
                <label for="inputEmail4" class="form-label">License status</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-sm-6 col-xl-3">
                <label for="inputEmail4" class="form-label">Position</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-auto ms-auto">
                <button class="btn btn-gray-550 btn-lg">
                    <span class="me-auto">See full list</span>
                    <svg class="icon ms-3" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                </button>
            </div>
        </form>
        <div class="pb-14">
            <div>20 players</div>
            <div>No Players have been have been added yet</div>
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th style="width: 0;"><div>Image</div></th>
                            <th><div class="name">Player name</div></th>
                            <th><div>Nationality</div></th>
                            <th><div>Position</div></th>
                            <th><div>No. of license<br>docs uploaded</div></th>
                            <th><div>Profile<br>completion</div></th>
                            <th><div>License<br>status</div></th>
                            <th><div>Created</div></th>
                            <th><div>Submitted</div></th>
                            <th style="width: 0;"><div>Profile</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- display a minimum of 5 rows. always display odd number of tr  -->
                        <tr>
                            <td><div class="avatar"><img src="../files/Players/Williams_Trent.png"></div></td>
                            <td><div class="name">Trent Williams</div></td>
                            <td><div class="flag"><img src="../files/flags/United_States.png"></div></td>
                            <td><div>QB</div></td>
                            <td><div class="fractions"><sup>7</sup><hr><sub>7</sub></div></td>
                            <td><div class="completion" style="--completion-color: #219653;">100%</div></td>
                            <td><div class="status" style="--status-color:#29A3EF;"></div></td>
                            <td><div class="time">Just now</div></td>
                            <td><div class="">Not submitted<br>yet</div></td>
                            <td><div>
                                <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#quickViewProfile">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                    <!-- <span class="badge left">4</span> -->
                                </button>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="avatar"><img src="../files/Players/Jones_Chandler.png"></div></td>
                            <td><div class="name">Chandler Jones</div></td>
                            <td><div class="flag"><img src="../files/flags/United_States.png"><img src="../files/flags/Germany.png"></div></td>
                            <td><div>RB</div></td>
                            <td><div class="fractions"><sup>7</sup><hr><sub>7</sub></div></td>
                            <td><div class="completion" style="--completion-color: #219653;">100%</div></td>
                            <td><div class="status" style="--status-color:#EB5757;"></div></td>
                            <td><div class="time">5 mins ago</div></td>
                            <td><div class="time">5 hr ago</div></td>
                            <td><div>
                                <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#quickViewProfile">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                    <!-- <span class="badge left">4</span> -->
                                </button>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="avatar"><img src="../files/Players/Whitworth_Andrew.png"></div></td>
                            <td><div class="name">Andrew Whitworth</div></td>
                            <td><div class="flag"><img src="../files/flags/United_States.png"></div></td>
                            <td><div>WR</div></td>
                            <td><div class="fractions"><sup>3</sup><hr><sub>7</sub></div></td>
                            <td><div class="completion" style="--completion-color: #F2994A;">60%</div></td>
                            <td><div class="status" style="--status-color:#828282;"></div></td>
                            <td><div class="time">2 hrs ago</div></td>
                            <td><div class="">Not submitted<br>yet</div></td>
                            <td><div>
                                <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#quickViewProfile">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                    <!-- <span class="badge left">4</span> -->
                                </button>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="avatar"><img src="../files/Players/Jones_Chandler.png"></div></td>
                            <td><div class="name">Chandler Jones</div></td>
                            <td><div class="flag"><img src="../files/flags/United_States.png"></div></td>
                            <td><div>TE</div></td>
                            <td><div class="fractions"><sup>2</sup><hr><sub>7</sub></div></td>
                            <td><div class="completion" style="--completion-color: #219653;">100%</div></td>
                            <td><div class="status" style="--status-color:#F2994A;"></div></td>
                            <td><div class="time">2 days ago</div></td>
                            <td><div class="time">1 day ago</div></td>
                            <td><div>
                                <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#quickViewProfile">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                    <!-- <span class="badge left">4</span> -->
                                </button>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="avatar"><img src="../files/Players/Koch_Sam.png"></div></td>
                            <td><div class="name">Sam Koch</div></td>
                            <td><div class="flag"><img src="../files/flags/United_States.png"></div></td>
                            <td><div>OL</div></td>
                            <td><div class="fractions"><sup>7</sup><hr><sub>7</sub></div></td>
                            <td><div class="completion" style="--completion-color: #219653;">100%</div></td>
                            <td><div class="status" style="--status-color:#219653;"></div></td>
                            <td><div class="time">2 weeks ago</div></td>
                            <td><div class="time">4 days ago</div></td>
                            <td><div>
                                <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#quickViewProfile">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                    <!-- <span class="badge left">4</span> -->
                                </button>
                            </div></td>
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

<?php include 'elements/quickViewProfile.php' ?>

<?php include 'elements/_footer_scripts.php' ?>

<?php include 'elements/_html_end.php' ?>