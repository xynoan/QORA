<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 400px;">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column p-0" style="border-bottom: none;">
                <img src="../../images/logout.png" alt="logout">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">See you next semester!</h1>
            </div>
            <div class="modal-body">
                <p class="m-0 text-center">You are about to log out.</p>
                <p class="m-0 text-center">Are you sure this is what you want?</p>
            </div>
            <div class="modal-footer d-flex justify-content-center pt-0 gap-3 align-items-center" style="border-top: none;">
                <button class="fw-bold rounded-3 p-2 cancel" type="button" style="border: none; background: white; color: var(--main-color);" data-bs-dismiss="modal" id="cancel">Cancel</button>
                <a href="../index.php" class="fw-bold text-white rounded-3 p-2 text-decoration-none" style="border: none; background: var(--main-color);" id="logoutBtn">Logout</a>
                <div class="input-group gap-1 d-flex justify-content-center">
                    <input type="checkbox" name="" id="allDevices" style="accent-color: var(--main-color);"> <label for="allDevices" style="color: var(--main-color);">Logout from all devices</label>
                </div>
            </div>

        </div>
    </div>
</div>