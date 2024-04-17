<?php

include_once "social_media.php";

class Instagram implements SocialMedia {
    private PostMediaManager $postMediaManager;

    public function __construct(PostMediaManager $postMediaManager) {
        $this->postMediaManager = $postMediaManager;
    }

    public function chat(): void {
        echo "Chatting on Instagram\n";
    }

    public function publishPost(): void {
        $this->postMediaManager->publishPost();
    }

    public function sendPhotosAndVideos(): void {
        echo "Sending photos and videos\n";
    }
}

?>
