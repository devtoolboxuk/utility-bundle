<?php

namespace devtoolboxuk\utilitybundle\handlers;

use ZipArchive;

class Files extends Handler
{
    public function archive($file, $archiveName = null)
    {
        try {
            $zipArchive = new \ZipArchive();

            if (!$archiveName) {
                $archiveName = sprintf('%s.zip', $file);
            } else {
                $archiveName = $this->path . $archiveName;
            }

            $result = $zipArchive->open($archiveName, \ZIPARCHIVE::CREATE);

            if (!$result) {
                throw new \Exception(sprintf('Failed to open zip archive: %s', $result));
            }

            if (!$zipArchive->addFile($this->path . $file, $file)) {
                throw new \Exception(sprintf('Failed to add file %s to zip archive %s', $file, $archiveName));
            }

            if (!$zipArchive->close()) {
                throw new \Exception('Failed to close zip archive.');
            }
        } catch (\Exception $e) {

        }

        return true;
    }

    public function deleteIfExists($file)
    {
        if (file_exists($file)) {
            try {
                unlink($file);
            } catch (\Exception $e) {
                throw new \Exception(sprintf("Failed to delete file '%s'.", $file));
            }
        }
    }

}