<?php

namespace data {
    abstract class Lokasi 
    {
        public string $name;
    }
    class Kota extends Lokasi
    {
    }
    class Provinsi extends Lokasi
    {
    }
    class Negara extends Lokasi
    {
    }
}