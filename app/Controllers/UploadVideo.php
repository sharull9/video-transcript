<?php

namespace App\Controllers;

class UploadVideo extends BaseController
{
    public function index()
    {

        $result = $this->videoModel->select('max(id) as maxId')->first();
        $videoId = $result['maxId'] + 1;
        $videoPath = getcwd() . '/dist/videos/' . $videoId . ".mp4";
        $response["message"] = 'File upload failed';
        $response["status"] = "failed";
        if (move_uploaded_file($_FILES["video-upload"]["tmp_name"], $videoPath)) {
            $data['title'] = $_POST['video-title'];
            $data['description'] = $_POST['video-description'];
            $data['date'] = date('Y-m-d', strtotime(str_replace('-', '/', $_POST['date']))); //date($_POST['date']);
            $data['house'] = $_POST['house'];
            $data['member_id'] = $_POST['speaker'];
            $data['tags'] = $_POST['tags'];
            $this->videoModel->insert($data);
            $response["message"] = "The file " . htmlspecialchars(basename($_FILES["video-upload"]["name"])) . " has been uploaded.";
            $response["status"] = "success";
        }
        echo json_encode($response);
    }
}

      // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // $data['title'] = $_POST['video-title'];
        // $data['description'] = $_POST['video-description'];
        // $data['upload'] = $_POST['video-upload'];
        // $data['url'] = $_POST['video-url'];
        // $data['speaker'] = $_POST['speaker'];
        // $data['date'] = $_POST['date'];
        // $data['tags'] = $_POST['tags'];
        // echo json_encode($data);
        // print_r($_POST); 