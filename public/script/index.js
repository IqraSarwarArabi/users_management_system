$(document).ready(function() {
    $("#filterName, #filterCompany").on("input", function() {
        filterUsers();
    });
    
    function filterUsers() {
        var filterName = $("#filterName").val().toLowerCase();
        var filterCompany = $("#filterCompany").val().toLowerCase();
        
        $("#userList .user").each(function() {
            var userName = $(this).find(".user-name").text().toLowerCase();
            var company = $(this).find(".company").text().toLowerCase();

            if (userName.includes(filterName) && company.includes(filterCompany)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
    
});