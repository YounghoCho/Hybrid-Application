package com.jointree.suwontalktalk;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.support.v7.app.AppCompatActivity;

//핸들러를 사용하기위해 import해준다.

public class SplashActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        setContentView(R.layout.splash);
        //splash 생성
        Handler handler = new Handler();
        handler.postDelayed(new Runnable() {
            @Override
            public void run() {
                Intent intent = new Intent(getApplicationContext(), com.jointree.suwontalktalk.MainActivity.class);
                startActivity(intent);
                finish();
            }
        }, 1500);
        //splash End
    }
}
