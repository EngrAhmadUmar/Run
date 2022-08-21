<footer class="un-bottom-navigation filter-blur">
    <div class="em_body_navigation border-0 -active-links">
        <div class="item_link">
            <a href="{{ route('dashboard') }}" class="btn btn_navLink visited" aria-label="btnNavigation">
                <div class="icon_current">
                    <i class="ri-home-5-line"></i>
                </div>
                <div class="icon_active">
                    <i class="ri-home-5-fill"></i>
                </div>
            </a>
        </div>


        <div class="item_link">
            <button title="Add Debit Card" type="button" name="uploadItem" aria-label="uploadItem" class="btn btn_navLink without_active" data-bs-toggle="modal" data-bs-target="#mdllUploadItem">
                <div class="btn btnCircle_default">
                    <i class="ri-add-line"></i>
                </div>
            </button>
        </div>


        
        <div class="item_link">
            <a href="{{ route('profile') }}" class="btn btn_navLink visited" aria-label="btnNavigation">
                <div class="icon_current">
                    <i class="ri-user-4-line"></i>
                </div>
                <div class="icon_active">
                    <i class="ri-user-4-fill"></i>
                </div>
            </a>
        </div>

    </div>
</footer>