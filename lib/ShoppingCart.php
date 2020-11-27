<?php
    class Product{
        var $id;
        var $num;
    }
    class ShoppingCart{
        var $listProduct;
        public function __construct(){
            $this->listProduct=array();
        }
        // hàm user cập nhật giở hàng
        public function update($id, $newNum){
            // xét vòng lặp tìm số sp có trong gio hang
            for($i=0; $i<count($this->listProduct); $i++)
            {
                //nếu tìm sản phẩm nào đó mà đúng id thì mình sẽ
                 if($this->listProduct[$i]->id== $id)
                 // thây đổi số lượng trong input qua số lượng mình thay đổi mới
                $this->listProduct[$i]->num=$newNum;
                
            }
        }
        // hàm user xoá giở hàng
        public function delete($id){
            for($i=0; $i<count($this->listProduct); $i++)
            {
                if($this->listProduct[$i]->id== $id){
                    // xóa phần tử trong mảng và thay thế bằng một phần tử hoặc một số phần tử khác.
                    array_splice($this->listProduct,$i,1);
                }
            }
        }
             // hàm user thêm giở hàng
        public function add($id){
            if(count($this->listProduct)==0){
                // lúc này là chưa có sản phẩm trong gioè hàng
                $p=new Product();
                $p->id=$id;
                $p->num=1;
            
                $this->listProduct[] = $p;
            }
            else{
                // lúc này đã có sản phẩm trong giwof hàng ròii
                // bây giwof, cần kiểm tra sp đó có trong giỏ hàng hay không
                //nếu có rồi thì cập nhật số lượng lên 1,còn k thì thêm vào giờ hàng
                for($i=0; $i<count($this->listProduct);$i++){
                    if($this->listProduct[$i]->id==$id)
                        break;
                }
                if($i==count($this->listProduct)){
                    // có nghĩa là duyệt hết giỏ hàng mà chả có sp
                    // thêm sp mới vào giỏ hàng
                    $p=new Product();
                    $p->id=$id;
                    $p->num=1;

                    $this->listProduct[]=$p;
                }
                else{
                    $this->listProduct[$i]->num++;
                }
            }
        }
    }
?>