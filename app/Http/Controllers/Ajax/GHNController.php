<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Http\Trait\ResponseTrait;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class GHNController extends Controller
{
    use ResponseTrait;

    public function getProvinces(Request $request)
    {
        $url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/province";
        $name = $request->get('province') ?: '';
        $name = Str::title($name);
        $token = config('services.ghn.token');

        $client = new Client();

        $response = $client->request('GET', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Token' => $token,
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $data = $response->getBody()->getContents();

        // Xử lý dữ liệu theo nhu cầu của bạn
        // Ví dụ: giải mã dữ liệu JSON
        $decodedData = json_decode($data)->data;

        // Trả về dữ liệu hoặc thực hiện các thao tác khác
        $result = new Collection();
        collect($decodedData)->filter(function ($item) use ($name, $result) {
            if(stristr($item->ProvinceName, $name)) {
                $result->push($item);
            }
        });

        return $this->successResponse($result, trans('Get Provinces Successfully'));
    }

    public function getDistrict(Request $request)
    {
        $url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/district";
        $token = config('services.ghn.token');

        $province_id = $request->get('province') ?: 202;
        $name = $request->get('district') ?: '';
        $name = Str::title($name);

        $client = new Client();

        $response = $client->request('GET', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Token' => $token,
            ],
            'query' => [
                'province_id' => $province_id,
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $data = $response->getBody()->getContents();

        // Xử lý dữ liệu theo nhu cầu của bạn
        // Ví dụ: giải mã dữ liệu JSON
        $decodedData = json_decode($data)->data;

        // Trả về dữ liệu hoặc thực hiện các thao tác khác
        $result = new Collection();
        collect($decodedData)->filter(function ($item) use ($name, $result) {
            if(stristr($item->DistrictName, $name)) {
                $result->push($item);
            }
        });

        return $this->successResponse($result, trans('Get District Successfully'));
    }

    public function getWard(Request $request)
    {
        $url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/ward?district_id";
        $token = config('services.ghn.token');

        $district_id = $request->get('district') ?: 3695;
        $name = $request->get('ward') ?: '';
        $name = Str::title($name);

        $client = new Client();

        $response = $client->request('GET', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Token' => $token,
            ],
            'query' => [
                'district_id' => $district_id,
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $data = $response->getBody()->getContents();

        // Xử lý dữ liệu theo nhu cầu của bạn
        // Ví dụ: giải mã dữ liệu JSON
        $decodedData = json_decode($data)->data;

        // Trả về dữ liệu hoặc thực hiện các thao tác khác
        $result = new Collection();
        collect($decodedData)->filter(function ($item) use ($name, $result) {
            if(stristr($item->WardName, $name)) {
                $result->push($item);
            }
        });

        return $this->successResponse($result, trans('Get Ward Successfully'));
    }
}
