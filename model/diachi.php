<?php   
    // if(isset($_POST['id'])) {
    // Load province
    function load_all_province() {
        $sql = "SELECT * FROM province WHERE 1";
        return pdo_query($sql);
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
            $listDistrict = load_district_by_id($key);
        ?>
            <option value="">Quận / Huyện</option>
        <?php
            foreach ($listDistrict as $district) {
                extract($district);
            ?>
                <option value="<?php echo $id ?>"><?php echo $_name ?></option>
            <?php
            }
        }

        if(isset($_POST['wardid'])) {
            $wardid = $_POST['wardid'];
            $listWardid = load_ward_by_id($wardid);
            foreach ($listWardid as $ward) {
                extract($ward);
            ?>
                <option value="<?php echo $id ?>"><?php echo $_name ?></option>
            <?php
            }
        }
    // }
?>