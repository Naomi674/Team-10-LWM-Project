<script>
    /**
     * Opens the modal html
     */
    function openModal() {
        const element = document.querySelector('.modal');
        element.classList.add('is-active');
    }

    /**
     * Closes the open modal element
     */
    function closeModal() {
        const element = document.querySelector('.modal');
        element.classList.remove('is-active');
    }
</script>

<div id="{{ $id }}" class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">{{ $title }}</p>
            <button onclick="closeModal()" class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            {{ $content }}
        </section>
        <footer class="modal-card-foot">
            <button class="button is-success">{{ $button1 }}</button>
            <button onclick="closeModal()" class="button">{{ $button2 }}</button>
        </footer>
    </div>
</div>