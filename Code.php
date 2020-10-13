<!-- cần nhúng link boostrap 4-->
<!-- Carousel product // cái data-interval này là chỉnh thời gian tự động chạy, tính bằng mili giây -->
            <div id="slides " class="carousel slide w-100" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner container-fluid">
                    <div class="carousel-item active">
                        <div class="container-fluid card-deck justify-content-between mt-2">
                            <?php $i = 1;
                            foreach ($product as $key => $value) :
                            ?>
                                <div class="card border-0">
                                    <a href="index.php?method=detail&id=<?php echo $value['id']; ?>">
                                        <img class="card-img-bottom h-285" src="./library/images/image-product/<?php echo $value['image']; ?>" alt="Card image cap">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $value['name']; ?></h4>
                                        <h5 class="card-title">Starting at $<span><?php echo $value['price']; ?></h5>
                                        <div class="card-title">
                                            <a class="card-link"">
                                                <i class="fa fa-cart-plus fa-2x"></i>
                                            </a>
                                        </div>
                                        <a class="card-link" href="index.php?method=detail&id=<?php echo $value['id']; ?>">Learn more ></a>
                                    </div>
                                </div>
                                <!-- đoạn này là bạn muốn bao nhiêu sản phẩm mỗi lượt -->
                                <?php if (($i % 4 == 0) && ($i != count($product))) {
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='carousel-item'>";
                                    echo "<div class='container-fluid card-deck justify-content-between mt-2'>";
                                }
                                $i++;
                                ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- 2 nút điều hướng, không nhất thiết phải ở cuối, bạn có thể chuyển đi chỗ bạn muốn và css lại -->
                    <a class="carousel-control-prev " href="#slides " role="button " data-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true "></span>
                        <span class="sr-only ">Previous</span>
                    </a>
                    <a class="carousel-control-next " href="#slides " role="button " data-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true "></span>
                        <span class="sr-only ">Next</span>
                    </a>
                </div>
            </div>
