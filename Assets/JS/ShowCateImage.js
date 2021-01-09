$(document).ready(function () {
        $.ajax({
            url: '../../Controller/ShowAllCateImageController.php',
            type: 'GET',
            success: function (data) {
                data= JSON.parse(data);
                data = data.data;
                data.forEach(dt => {
                    $('ads').append(' <div class="col-md-4"><div class="card rounded"><div class="card-image"><span class="card-notify-badge">Low KMS</span><span class="card-notify-year">2018</span><img class="img-fluid" src="./Assets/Images/Biet_Thu_NIOMON.png" alt="Alternate Text" /></div><div class="card-image-overlay m-auto"><span class="card-detail-badge">Used</span><span class="card-detail-badge">$28,000.00</span><span class="card-detail-badge">13000 Kms</span></div><div class="card-body text-center"><div class="ad-title m-auto"><h5>Honda Accord LX</h5></div><a class="ad-btn" href="#">View</a></div></div></div>'); 
                });
            },
            error: function (e) {
                console.log(e.message);
            }
        });

});