<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DemoController extends Controller {
    function DemoAction(): string {
        return "This is my first request-response";
    }

    function requestParameter( Request $request ): string {
        $name = $request->name;
        $age = $request->age;
        return "My name is $name and my age is $age";
    }

    function requestJson( Request $request ): string {
        $name = $request->input( 'name' );
        $age = $request->input( 'age' );
        return "My name is $name and my age is $age";
    }

    function requestHeader( Request $request ): string {
        $name = $request->header( 'name' );
        $age = $request->header( 'age' );
        return "My name is $name and my age is $age";
    }

    function requestHeaderBodyParam( Request $request ): array {
        $pin = $request->header( 'pin' );
        $city = $request->input( 'city' );
        $postcode = $request->input( 'postcode' );
        $name = $request->name;
        $age = $request->age;

        return array(
            "pin"      => $pin,
            "city"     => $city,
            "postcode" => $postcode,
            "name"     => $name,
            "age"      => $age,
        );
    }

    function formData( Request $request ): array {
        $photoFile = $request->file( 'photo' );
        $fileSize = filesize( $photoFile );
        $fileType = filetype( $photoFile );
        $fileOriginalName = $photoFile->getClientOriginalName();
        $fileTempName = $photoFile->getFilename();
        $fileExtension = $photoFile->extension();

        return array(
            "fileSize"         => $fileSize,
            "fileType"         => $fileType,
            "fileOriginalName" => $fileOriginalName,
            "fileTempName"     => $fileTempName,
            "fileExtension"    => $fileExtension,
        );
    }

    function fileUpload( Request $request ): bool {
        $photoFile = $request->file( 'photo' );

        // Uploads the file to the "storage/app/upload" directory (non-public/private storage)
        $photoFile->storeAs( 'upload', $photoFile->getClientOriginalName() );

        // Moves the file to the "public/upload" directory, making it accessible via the web
        $photoFile->move( public_path( 'upload' ), $photoFile->getClientOriginalName() );

        return true;
    }

    function ipAddress( Request $request ): string {
        return $request->ip();

    }

    function accContentType( Request $request ): bool {
        if ( $request->accepts( ['text/html'] ) ) {
            return true;
        } else {
            return false;
        }
    }

}
