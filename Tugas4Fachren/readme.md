# Membuat Angka Memakai form group
```php
<form action=""method="POST">
    Masukkan bintang <input type="text" name="bintang"><input type="submit" name="submit" value="Submit">
    </form>
    }
```

### Melakukan pengecekan apakah submit itu  akan menampilkan pesan *Kalau ya yang ini maka bintang akan muncul* 
```php
if (isset($_POST['submit'])) {
        $bintang = $_POST['bintang'];
```



### Perulangan dengan for loop yang dimulai dari angka 1 
```php
for ($a = 1; $a <= $bintang; $a++) {
    for ($b = 1; $b <= $a; $b++) {
    echo "*";
            }
``` 

