<div class="cart bg-[rgba(0,0,0,.8)]  h-[100vh] w-[100vw] fixed z-50  hidden" id="cart_mini">
    <div class="w-[320px]  block h-full absolute right-0 bg-white translate-x-64 transition-all ease-in-out duration-500"
        id="cart_mini2">
        <div class="flex w-full bg-[#222]  leading-10 text-white p-3 text-base tracking-wider">
            <div class="cursor-pointer px-3 hover:bg-slate-700 hover:rounded-full hover:rotate-180 transition-all ease-in duration-200 "
                id="close_cart"><i class="fa-solid fa-x "></i></div>
            <h3 class="flex justify-center items-center w-full font-bold uppercase">mini cart</h3>
        </div>
        <div class="p-5">
            <div class="h-full ">
                <ul class="overflow-y-auto h-auto max-h-[24rem] container_cart">
                    <?php if (!empty($_SESSION['cart'])) { ?>
                        <?php foreach ($_SESSION['cart'] as $item) { ?>
                            <?php if (!empty($_SESSION['cart'])) { ?>
                                <li class="flex mt-3 item_cart">
                                    <a href="#" class="flex text-[13px] relative">
                                        <div
                                            class="before:w-[70px] before:bg-[rgba(0,0,0,.5)] before:content-['X'] before:flex before:justify-center before:items-center before:text-white before:h-full before:absolute before:top-0 before:left-0 before:opacity-0 before:hover:opacity-100 before:">

                                            <img src="./public/media/img/<?php echo $item['productImage'] ?>.jpg" alt="" loading="lazy"
                                                class="w-[70px] mr-2 ">
                                        </div>

                                        <span class="block whitespace-nowrap">
                                            <h1 class="text-sm font-poppins">
                                                <?php echo $item['productName'] ?>
                                            </h1>
                                            <span class="flex text-xs text-[#878787]">
                                                <span>
                                                    <span>
                                                        <?php echo $item['quantity']; ?>
                                                    </span>
                                                    x
                                                    <span>
                                                        $
                                                        <?php echo $item['productPrice'] ?>.00
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            <?php } ?>

                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="flex justify-between items-center my-5 text-lg">
                <p class="font-bold">Subtotal:</p>
                <span><span>$</span>
                    <?php if (!empty($_SESSION['cart'])) { ?>
                        <?php
                        $totalPrice = 0;
                        foreach ($_SESSION['cart'] as $item) {
                            $totalPrice += $item['productPrice'] * $item['quantity'];
                        }
                        echo number_format($totalPrice, 3);
                        ?>
                    <?php } else { ?>
                        0.000   
                    <?php } ?>
                </span>
            </div>
            <div class="flex justify-center items-center w-full">
                <div class="w-full text-white text-sm">
                    <a href="cart.php">
                        <p
                            class="mb-3 bg-[#222]  rounded-full flex justify-center items-center py-2 uppercase font-normal hover:bg-[#56cfe1]">
                            view cart</p>
                    </a>
                    <a href="check_out.php">
                        <p
                            class="mb-3 bg-[#222] rounded-full flex justify-center items-center py-2 uppercase font-normal hover:bg-[#56cfe1]">
                            checkout</p>
                    </a>
                    <a href="product.php">
                        <p
                            class="bg-[#222] rounded-full flex justify-center items-center py-2 uppercase font-normal hover:bg-[#56cfe1]">
                            continue shopping</p>
                    </a>
                </div>
            </div>


        </div>

    </div>
</div>