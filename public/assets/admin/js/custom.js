// ----- ON LOAD -----
$(window).on('load', function () {
    $('#pageloader').fadeOut();
});
// ----- END ON LOAD -----


// ----- PRELOADER -----
const PRELOADER = `
<div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center py-5">
    <div class="spinner-grow spinner-grow-lg text-secondary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <h6 class="mt-2">Please wait...</h6>
</div>`;
// ----- END PRELOADER -----


// ----- ASSET URL -----
const ASSET_URL = $('meta[name=asset-url]').attr('content');
// ----- END ASSET URL -----


// ----- PREVENT REFRESH -----
window.onbeforeunload = function() {
    if (['add', 'edit'].includes($('main').attr('event'))) {
        return true; // SAME RESULT
    }
    return;
}
// ----- END PREVENT REFRESH -----


// ----- SHOW TOAST -----
function showToast(type = 'success', text = '') {
    if (type == 'success') {
        new bs5.Toast({
            body: `
            <div class="d-flex gap-3">
                <img class="rounded-circle" width="30" height="30" src="/assets/admin/img/modal/success.png">
                <div>
                    <h5 class="mb-0">SUCCESS</h5>
                    <p class="mb-0">
                        ${text}
                    </p>
                </div>
            </div>`,
            className: `border-0 bg-success text-white`,
            btnCloseWhite: true,
        }).show()
    } else if (type == 'error') {
        new bs5.Toast({
            body: `
            <div class="d-flex gap-3">
                <img class="rounded-circle" width="30" height="30" src="/assets/admin/img/modal/error.png">
                <div>
                    <h5 class="mb-0">Error</h5>
                    <p class="mb-0">
                        ${text}
                    </p>
                </div>
            </div>`,
            className: `border-0 bg-danger text-white`,
            btnCloseWhite: true,
        }).show()
    }

}
// ----- END SHOW TOAST -----


// ----- VIEW NOTIFICATION -----
function viewNotification(id = '', link = '') {
    $.ajax({
        url: `/notification/update/${id}`,
        method: 'POST',
        async: false,
        dataType: 'json',
        success: function(data) {
            window.location.replace(link);
            // let { status } = data;
            // if (status == 'success') {
            // } else {
            //     showToast('danger', 'Something went wrong.');
            // }
        }
    })
}
// ----- END VIEW NOTIFICATION -----


// ----- INITIALIZE SELECT2 -----
function initSelect2() {
    $(`[select2]`).select2({
        width: 'resolve'
    });
}
// ----- END INITIALIZE SELECT2 -----


// ----- INITIALIZE DATERANGEPICKER -----
function initDateRangePicker() {
    $(`[daterangepicker]`).daterangepicker({
        opens: 'left',
        showDropdowns: true,
        locale: {
            format: 'MMMM DD, YYYY'
        }
    }, function(start, end, label) {
        // console.log(start.format('YYYY-MM-DD'));
        // console.log(end.format('YYYY-MM-DD'));
    });
}
// ----- END INITIALIZE DATERANGEPICKER -----


// ----- GET FILE ICON -----
function getFileIcon(filename = 'unknown.png') {
    filename = filename.split('.');
    switch (filename[filename.length - 1]) {
        case 'jpg': return 'jpg.png';
        case 'png': return 'png.png';
        case 'pdf': return 'pdf.png';
        case 'xlsx': case 'xls': return 'excel.png';
        case 'docx': case 'doc': return 'word.png';
        default: return 'unknown.png';
    }
}
// ----- END GET FILE ICON -----


// ----- PREVENT REFRESH -----
function preventRefresh(flag = true) {
    $("main").attr("prevent-refresh", flag ? 'true' : 'false');
}

window.addEventListener('beforeunload', function (e) {
    if ($("main").attr("prevent-refresh") == "true") {
        e.preventDefault(); // If you prevent default behavior in Mozilla Firefox prompt will always be shown
        // Chrome requires returnValue to be set
        e.returnValue = '';
    }
});
// ----- END PREVENT REFRESH -----



$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ----- INIT ALL -----
    function initAll() {
        initSelect2(); // Initialize select2
        initDateRangePicker();
    }
    initAll();
    // ----- END INIT ALL -----

})
