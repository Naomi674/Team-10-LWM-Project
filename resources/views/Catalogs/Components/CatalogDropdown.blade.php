<div class="label">Catalog</div>
<div class="dropdown">
    <div class="dropdown-trigger">
        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
            <span>Facilities</span>
            <span class="icon is-small">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
        </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu3" role="menu">
        <div class="dropdown-content">
            <a href="#" class="dropdown-item">
                Buisness Support
            </a>
            <a href="/catalog/facilities" class="dropdown-item is-active">
                Facilities
            </a>
            <a href="#" class="dropdown-item">
                Finance
            </a>
            <a href="#" class="dropdown-item">
                Home Office
            </a>
            <a href="#" class="dropdown-item">
                HR and Payroll
            </a>
            <a href="#" class="dropdown-item">
                IT Services
            </a>
            <a href="#" class="dropdown-item">
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
