<div class="dropdown">
    <div class="dropdown-trigger">
        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
            <span id="dropdownTitle">Catalog</span>
            <span class="icon is-small">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
        </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu3" role="menu">
        <div class="dropdown-content">
            <a href="/catalog/facilities" class="dropdown-item">
                Facilities
            </a>
            <a href="/catalog/finance" class="dropdown-item">
                Finance
            </a>
            <a href="/catalog/businesssupport" class="dropdown-item">
                Business Support
            </a>
            <a href="/catalog/hr" class="dropdown-item">
                HR
            </a>
            <a href="/catalog/it" class="dropdown-item is-selected">
                IT
            </a>
            <a href="/catalog/masterdata" class="dropdown-item">
                Masterdata
            </a>
        </div>
    </div>
</div>

<script>
    let dropdown = document.querySelector('.dropdown');
    dropdown.addEventListener('click', function(event) {
        event.stopPropagation();
        dropdown.classList.toggle('is-active');
    });
</script>
