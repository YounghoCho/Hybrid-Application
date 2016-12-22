package com.example.suwontalktalk;

import android.content.DialogInterface;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.view.KeyEvent;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;


public class MainActivity extends AppCompatActivity {
    //전역변수
    private WebView webView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //webview
        webView = (WebView) findViewById(R.id.webView1);
        webView.setWebViewClient(new WebViewClient()); //웹뷰내에서 네비게이션

        WebSettings webSettings = webView.getSettings();
        //자바스크립트를 가능하게 한다.
        webSettings.setJavaScriptEnabled(true);

        //Web의 tel: 연결기능을 안드로이드에서도 기능하게하기
        webView.setWebViewClient(new WebViewClient(){
            @Override
            public boolean shouldOverrideUrlLoading(WebView view, String url) {
                if( url.startsWith("http:") || url.startsWith("https:") ) {
                    return false;
                }

                // Otherwise allow the OS to handle things like tel, mailto, etc.
                Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse(url));
                startActivity( intent );
                return true;
            }
        });

        //포털사이트, 블랙보드 확대기능
        webView.getSettings().setUseWideViewPort(true);
        webView.setInitialScale(26);
        //URL
        webView.loadUrl("http://www.suin.woobi.co.kr");
        //webView End
    }
    //뒤로가기 기능
    @Override
    public boolean onKeyDown(int keyCode, KeyEvent event){
        if((keyCode== KeyEvent.KEYCODE_BACK)&& webView.canGoBack()){
            webView.goBack();
            return true;
        }
        //백할 페이지가 없다면
        if ((keyCode == KeyEvent.KEYCODE_BACK) && (webView.canGoBack() == false)){
            //     Toast.makeText(this, "버튼 클릭 이벤트", Toast.LENGTH_SHORT).show();

            //다이아로그박스 출력
            new AlertDialog.Builder(this)
                    .setTitle("수원톡톡")
                    .setMessage("앱을 종료하시겠습니까?")
                    .setPositiveButton("예", new DialogInterface.OnClickListener() {
                        @Override
                        public void onClick(DialogInterface dialog, int which) {
                            android.os.Process.killProcess(android.os.Process.myPid());
                        }
                    })
                    .setNegativeButton("아니오",  null).show();
        }
        return super.onKeyDown(keyCode, event);
    }
}
