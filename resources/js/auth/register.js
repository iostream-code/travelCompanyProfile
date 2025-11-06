export default function register() {
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

        const namaLengkap = $('#nama_lengkap').val() || $('#nama_lengkap_mobile').val() || '';
        formData.append('nama_lengkap', namaLengkap);

        const jabatan = $('#jabatan').val() || $('#jabatan_mobile').val() || '';
        formData.append('jabatan', jabatan);

        formData.append('address', $('#address').val() || '');
        formData.append('no_telp', $('#nomor_telepon').val() || '');
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
                resetButtonState();

                if (response.credentials) {
                    $('#modal-email').text(response.credentials.email);
                    $('#modal-password').text(response.credentials.password);
                    $('#success-modal').removeClass('hidden');
                }

                $('#register-form')[0].reset();
                $('#file-name').addClass('hidden');

                if (response.message) {
                    showSuccessAlert(response.message);
                }
            },
            error: function (xhr) {
                resetButtonState();

                let errorMessage = 'Terjadi kesalahan yang tidak diketahui. Silakan coba lagi.';

                try {
                    const response = xhr.responseJSON;

                    if (response) {
                        if (response.message) {
                            errorMessage = response.message;
                        }

                        if (response.errors && typeof response.errors === 'object') {
                            const errorList = [];
                            for (const field in response.errors) {
                                if (response.errors.hasOwnProperty(field)) {
                                    const fieldErrors = response.errors[field];
                                    if (Array.isArray(fieldErrors)) {
                                        errorList.push(...fieldErrors);
                                    } else {
                                        errorList.push(fieldErrors);
                                    }
                                }
                            }
                            if (errorList.length > 0) {
                                errorMessage = errorList.join('<br>');
                            }
                        }

                        if (response.error && typeof response.error === 'string') {
                            errorMessage = response.error;
                        }
                    }
                } catch (e) {
                    console.error('Error parsing response:', e);
                }

                if (xhr.status === 0) {
                    errorMessage = 'Tidak dapat terhubung ke server. Periksa koneksi internet Anda.';
                } else if (xhr.status === 403) {
                    errorMessage = errorMessage || 'Akses ditolak. Token tidak valid.';
                } else if (xhr.status === 404) {
                    errorMessage = 'Endpoint tidak ditemukan. Silakan hubungi administrator.';
                } else if (xhr.status === 413) {
                    errorMessage = 'File yang diunggah terlalu besar. Maksimal 10MB.';
                } else if (xhr.status === 429) {
                    errorMessage = 'Terlalu banyak permintaan. Silakan tunggu beberapa saat.';
                } else if (xhr.status >= 500) {
                    errorMessage = errorMessage || 'Terjadi kesalahan pada server. Silakan coba lagi nanti.';
                }

                showErrorAlert(errorMessage);
            }
        });
    });

    $('#close-modal-btn').on('click', function () {
        $('#success-modal').addClass('hidden');
    });

    $('#success-modal .bg-white').on('click', function (e) {
        e.stopPropagation();
    });

    function resetButtonState() {
        $('#submit-btn').prop('disabled', false);
        $('#btn-text').text('Daftar Sekarang');
        $('#btn-icon').removeClass('hidden');
        $('#btn-loading').addClass('hidden');
    }

    function showSuccessAlert(message) {
        $('#success-message').html(message);
        $('#alert-success').removeClass('hidden');
        scrollToAlert('#alert-success');
    }

    function showErrorAlert(message) {
        $('#error-message').html(message);
        $('#alert-error').removeClass('hidden');
        scrollToAlert('#alert-error');
    }

    function scrollToAlert(selector) {
        $('html, body').animate({
            scrollTop: $(selector).offset().top - 100
        }, 500);
    }
}
