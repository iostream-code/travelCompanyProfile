export default function register() {
    console.log('✓ Register page script loaded'); // Debug log

    $('#verified_document').on('change', function () {
        const fileName = $(this).val().split('\\').pop();
        if (fileName) {
            $('#file-name-text').text(fileName);
            $('#file-name').removeClass('hidden');
        } else {
            $('#file-name').addClass('hidden');
        }
    });

    $('#register-form').on('submit', function (e) {
        e.preventDefault();

        $('#alert-success, #alert-error').addClass('hidden');

        $('#submit-btn').prop('disabled', true);
        $('#btn-text').text('Memproses...');
        $('#btn-icon').addClass('hidden');
        $('#btn-loading').removeClass('hidden');

        const formData = new FormData();
        formData.append('nama_travel', $('#nama_travel').val());
        formData.append('address', $('#address').val() || '');
        formData.append('province_code', '');
        formData.append('city_code', '');
        formData.append('district_code', '');
        formData.append('village_code', '');
        formData.append('website', $('#website').val() || '');
        formData.append('token', $('#token').val());

        const fileInput = $('#verified_document')[0];
        if (fileInput.files.length > 0) {
            formData.append('verified_document', fileInput.files[0]);
        }

        $.ajax({
            url: 'https://www.be.travel.devkoperindo.com/api/korin/travels',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'Accept': 'application/json'
            },
            success: function (response) {
                $('#submit-btn').prop('disabled', false);
                $('#btn-text').text('Daftar Sekarang');
                $('#btn-icon').removeClass('hidden');
                $('#btn-loading').addClass('hidden');

                $('#modal-email').text(response.credentials.email);
                $('#modal-password').text(response.credentials.password);
                $('#success-modal').removeClass('hidden');

                $('#register-form')[0].reset();
                $('#file-name').addClass('hidden');
            },
            error: function (xhr) {
                $('#submit-btn').prop('disabled', false);
                $('#btn-text').text('Daftar Sekarang');
                $('#btn-icon').removeClass('hidden');
                $('#btn-loading').addClass('hidden');

                let errorMessage = 'Terjadi kesalahan. Silakan coba lagi.';

                if (xhr.responseJSON) {
                    if (xhr.responseJSON.error) {
                        errorMessage = xhr.responseJSON.error;
                    } else if (xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    } else if (xhr.responseJSON.errors) {
                        const errors = xhr.responseJSON.errors;
                        errorMessage = Object.values(errors).flat().join('<br>');
                    }
                }

                $('#error-message').html(errorMessage);
                $('#alert-error').removeClass('hidden');

                $('html, body').animate({
                    scrollTop: $('#alert-error').offset().top - 100
                }, 500);
            }
        });
    });

    // Close modal button handler
    $('#close-modal-btn').on('click', function () {
        $('#success-modal').addClass('hidden');
    });

    // Close modal when clicking outside
    $('#success-modal').on('click', function (e) {
        if (e.target.id === 'success-modal') {
            $('#success-modal').addClass('hidden');
        }
    });
}
