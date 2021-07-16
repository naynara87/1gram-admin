<div class="modal fade bg-dark-o-50" id="classReg" tabindex="-1" aria-labelledby="classReg" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered px-5" role="document" style="min-width:40%">
        <div class="modal-content overflow-hidden">
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label font-weight-bold">학교</label>
                        <div class="col-md-10">
                            <select class="form-control select2 form-control-lg" id="kt_select2_6" name="param">
                                <option label="Label"></option>
                            </select>
                            <!-- <input class="form-control form-control-lg font-weight-bold" type="text" name="title" placeholder="ex) 갈현초등학교"> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label font-weight-bold">학년</label>
                        <div class="col-md-10">
                            <select class="form-control">
                            <option value="">--선택--</option>
                                <option value="1">1학년</option>
                                <option value="2">2학년</option>
                                <option value="3">3학년</option>
                                <option value="4">4학년</option>
                                <option value="5">5학년</option>
                                <option value="6">6학년</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label font-weight-bold">클래스</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="title" placeholder="클래스명을 입력하세요.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label font-weight-bold">태그</label>
                        <div class="col-md-10">
                        <select class="form-control select2" id="kt_select2_11" multiple="multiple" name="param" value="영어">
                                    <option value="AL">수학</option>
                                    <option value="AR">영어</option>
                                    <option value="IL">과학</option>
                                    <option value="IA">한문</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                            </select>
							<!-- <input id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='태그를 입력하세요.' value='수학, 과학, 국어' data-blacklist='.NET,PHP' /> -->
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <label class="col-md-2 col-form-label font-weight-bold">학생일괄등록</label>
                        <div class="col-md-10">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="students_file" accept=".xlsx">
                                <label class="custom-file-label" for="customFile" aria-describedby="students_file">등록할 폴더를 선택하세요.</label>
                            </div>
                        </div>
							<a href="http://new.1gram.cc/cms/lesson/studentTemplateDownload" class="btn btn-light-primary btn-sm text-right">
                            <i class="la la-cloud-download-alt"></i>엑셀양식 다운로드</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center py-2">
                <a href="#" class="btn btn-secondary font-weight-bold" data-dismiss="modal" aria-label="Close">취소</a>
                <a href="#" class="btn btn-primary font-weight-bold">저장</a>
            </div>
        </div>
    </div>
</div>