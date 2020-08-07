$('#avatar').on('input', function() {
    $('#avatar-img').attr('src', 'public/images/avatars/' + $(this).val() + '.jpg');
});
