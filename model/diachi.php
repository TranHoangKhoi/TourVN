<?php   
    // if(isset($_POST['id'])) {
    // Load province
    function load_all_province() {
        $sql = "SELECT * FROM province WHERE 1 ORDER BY _name ASC";
        return pdo_query($sql);
    }

    // 
    function get_province($id) {
        $sql = "SELECT * FROM province WHERE id = $id";
        return pdo_query_one($sql);
    }
    
    // 
    function get_district($id) {
        $sql = "SELECT * FROM district WHERE id = $id";
        return pdo_query_one($sql);
    }

    // 
    function get_ward($id) {
        $sql = "SELECT * FROM ward WHERE id = $id";
        return pdo_query_one($sql);
    }



    // Load district
    function load_district_by_id($key) {
        include './pdo.php';
        $sql = "SELECT * FROM district WHERE _province_id = '$key'";
        return pdo_query($sql);
    }

    function load_ward_by_id($wardid) {
        include './pdo.php';
        $sql = "SELECT * FROM ward WHERE _district_id = '$wardid'";
        return pdo_query($sql);
    }

   
        if(isset($_POST['provinceid'])) {
            $key = $_POST['provinceid'];

            $idQuan = $_POST['disid'];
            $listDistrict = load_district_by_id($key);
        ?>
            <!-- <option value="">Quận / Huyện</option> -->
        <?php
            foreach ($listDistrict as $district) {
                extract($district);
                if($id == $idQuan ) {
            ?>
                <option selected value="<?php echo $id ?>"><?php echo $_name ?></option>

                
            <?php
                } else {
            ?>
                <option value="<?php echo $id ?>"><?php echo $_name ?></option>
            <?php
            
                }
            }
        }

        if(isset($_POST['wardid'])) {
            $wardid = $_POST['wardid'];
            $wardidAcc = $_POST['wardidAcc'];

            $listWardid = load_ward_by_id($wardid);
            foreach ($listWardid as $ward) {
                extract($ward);
                if($id == $wardidAcc ) {
            ?>
                <option selected value="<?php echo $id ?>"><?php echo $_name ?></option>
            <?php
                } else {
            ?>
                <option value="<?php echo $id ?>"><?php echo $_name  ?></option>
            <?php 
                }
            }
        }
    // }
?>