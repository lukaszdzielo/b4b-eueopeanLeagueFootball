<div class="mt-8">
    <div class="container-fluid px-sm-8 px-md-12 d-flex align-items-center">
        <button class="btn btn-menu d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#side_menu" aria-controls="offcanvasExample">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
        </button>
        <div class="ms-auto me-8">
            <button id="notificationsBtn" class="btn btn-notifications">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/></svg>
                <span class="badge">2</span>
            </button>
            <div class="position-absolute top-0 end-0 p-3">
                <div id="notificationsToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <div class="heading me-auto">New Notifications</div>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close">
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
                    <img src="https://via.placeholder.com/45x45">
                </span> -->
                <span class="text">
                    <span class="name">Michael</span>
                    <span class="status">E.L.F. Admin</span>
                </span>
                <svg class="icon arrow" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
            </button>
            <ul class="dropdown-menu dropdown-menu-end mt-2">
                <li><a class="dropdown-item" href="#">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-4.42 3.58-8 8-8 1.85 0 3.55.63 4.9 1.69L5.69 16.9C4.63 15.55 4 13.85 4 12zm8 8c-1.85 0-3.55-.63-4.9-1.69L18.31 7.1C19.37 8.45 20 10.15 20 12c0 4.42-3.58 8-8 8z"/></svg>
                    <span class="text">Settings</span>
                </a></li>
                <li><a class="dropdown-item" href="#">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-4.42 3.58-8 8-8 1.85 0 3.55.63 4.9 1.69L5.69 16.9C4.63 15.55 4 13.85 4 12zm8 8c-1.85 0-3.55-.63-4.9-1.69L18.31 7.1C19.37 8.45 20 10.15 20 12c0 4.42-3.58 8-8 8z"/></svg>
                    <span class="text">Logout</span>
                </a></li>
            </ul>
        </div>
    </div>
</div>