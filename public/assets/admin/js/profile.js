document.getElementById('profileImage').addEventListener('click', function() {
    document.getElementById('fileInput').click();
});
document.getElementById('fileInput').addEventListener('change', function() {
    const file = this.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const image = document.getElementById('profileImage');
        image.src = e.target.result;

        // Optionally, send the image to the server using AJAX or a form submission
        // Example using AJAX (you'll need to handle this on the server side)
        const formData = new FormData();
        formData.append('profile_image', file);
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/admin/upload-image', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
    }

    reader.readAsDataURL(file);
});
