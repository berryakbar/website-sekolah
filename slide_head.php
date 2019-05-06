<div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <?php 
                include 'koneksi.php';
                $query=mysqli_query($conn,"select * from galeri_foto order by id_foto desc limit 1");
                while ($data=mysqli_fetch_assoc($query)) {   ?>
            <div class="carousel-item active">
                <a href="detile_tulisan.php?id_tulisan=<?php echo $data["id_tulisan"];?>"><img class="w-100 d-block" src="admin/img/<?php echo $data['foto']; ?>" alt="Slide Image" style="height:300px;"></a>
            </div>
            <?php } ?>
            <?php 
                include 'koneksi.php';
                $query=mysqli_query($conn,"select * from galeri_foto order by id_foto limit 2,3");
                while ($data=mysqli_fetch_assoc($query)) {   ?>
            <div class="carousel-item">
                
                <a href="detile_tulisan.php?id_tulisan=<?php echo $data["id_tulisan"];?>"><img class="w-100 d-block" src="admin/img/<?php echo $data['foto']; ?>" alt="Slide Image" style="height:300px;"></a>
            </div>
            <?php } ?>
        </div>
        <div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
            </a>
        </div>
        
    </div>