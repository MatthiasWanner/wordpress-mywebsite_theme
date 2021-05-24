<?php
class Portfolio_Infos
{
    public string $site_name;
    public string $description;
    public string $name;
    public string $img_url;

    public function __construct(string $site_name, string $description, string $name, string $img_url)
    {
        $this->site_name = $site_name;
        $this->description = $description;
        $this->name = $name;
        $this->profile_img = $img_url;
    }
}