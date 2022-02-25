<?php include 'elements/_html_start.php' ?>

<?php include 'elements/_head.php' ?>

<?php include 'elements/side_menu.php' ?>

<main>

    <?php include 'elements/top_bar.php' ?>

    <div class="container-fluid pt-4 px-sm-8 overflow-hidden">
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
        <div class="pb-16">
            <div>20 players</div>
            <div>No Players have been have been added yet</div>

            <div class="table-responsive pb-3">
                <div id="table" class="d-table">
                    <div class="th">
                        <div class="td"><div>Image</div></div>
                        <div class="td"><div class="name">Player name</div></div>
                        <div class="td"><div>Nationality</div></div>
                        <div class="td"><div>Position</div></div>
                        <div class="td"><div>No. of license<br>docs uploaded</div></div>
                        <div class="td"><div>Profile<br>completion</div></div>
                        <div class="td"><div>License<br>status</div></div>
                        <div class="td"><div>Created</div></div>
                        <div class="td"><div>Submitted</div></div>
                        <div class="td"><div>Profile</div></div>
                    </div>
                    <div class="tr">
                        <div class="td"><div class="avatar"><img src="https://via.placeholder.com/65"></div></div>
                        <div class="td"><div class="name text-nowrap">Trent Williams</div></div>
                        <div class="td"><div class="flag"><img src="https://via.placeholder.com/35"></div></div>
                        <div class="td"><div>QB</div></div>
                        <div class="td"><div class="fractions"><sup>7</sup><hr><sub>7</sub></div></div>
                        <div class="td"><div class="completion" style="--completion-color: #219653;">100%</div></div>
                        <div class="td"><div class="status" style="--status-color:#29A3EF;"></div></div>
                        <div class="td"><div class="time text-nowrap">Just now</div></div>
                        <div class="td"><div class=" text-nowrap">Not submitted<br>yet</div></div>
                        <div class="td"><div>ICON</div></div>
                    </div>
                    <div class="tr">
                        <div class="td"><div class="avatar"><img src="https://via.placeholder.com/65"></div></div>
                        <div class="td"><div class="name text-nowrap">Chandler Jones</div></div>
                        <div class="td"><div class="flag"><img src="https://via.placeholder.com/35"><img src="https://via.placeholder.com/35"></div></div>
                        <div class="td"><div>RB</div></div>
                        <div class="td"><div class="fractions"><sup>7</sup><hr><sub>7</sub></div></div>
                        <div class="td"><div class="completion" style="--completion-color: #219653;">100%</div></div>
                        <div class="td"><div class="status" style="--status-color:#EB5757;"></div></div>
                        <div class="td"><div class="time text-nowrap">5 mins ago</div></div>
                        <div class="td"><div class="time text-nowrap">5 hr ago</div></div>
                        <div class="td"><div>ICON</div></div>
                    </div>
                    <div class="tr">
                        <div class="td"><div class="avatar"><img src="https://via.placeholder.com/65"></div></div>
                        <div class="td"><div class="name text-nowrap">Sam Koch</div></div>
                        <div class="td"><div class="flag"><img src="https://via.placeholder.com/35"></div></div>
                        <div class="td"><div>OL</div></div>
                        <div class="td"><div class="fractions"><sup>7</sup><hr><sub>7</sub></div></div>
                        <div class="td"><div class="completion" style="--completion-color: #219653;">100%</div></div>
                        <div class="td"><div class="status" style="--status-color:#219653;"></div></div>
                        <div class="td"><div class="time text-nowrap">2 weeks ago</div></div>
                        <div class="td"><div class="time text-nowrap">4 days ago</div></div>
                        <div class="td"><div>ICON</div></div>
                    </div>
                </div>
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