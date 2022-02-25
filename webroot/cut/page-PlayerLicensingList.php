<?php include 'elements/_html_start.php' ?>

<?php include 'elements/_head.php' ?>

<?php include 'elements/side_menu.php' ?>

<main>

    <?php include 'elements/top_bar.php' ?>

    <div class="container-fluid pt-8 px-sm-8 px-md-12 overflow-hidden">
        <div class="row g-4 align-items-center mb-8">
            <div class="col-auto me-auto">
                <h1 class="fw-bold mb-0 me-4">Dashboard</h1>
            </div>
            <div class="col-auto">
                <button class="btn btn-gray-550 btn-lg">
                    <span class="me-auto">See full list</span>
                    <svg class="icon ms-3" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                </button>
            </div>
        </div>
        <div class="row pb-16">
            <div class="col">
                <div>20 players</div>
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